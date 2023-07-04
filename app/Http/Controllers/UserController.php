<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warga;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function super()
    {
        $users = User::where('role', '!=', 'Super')
            ->where('role', '!=', 'User')
            ->get();

        return view('admin.user_admin', compact('users'));
    }

    public function admin()
    {
        $users = User::where('role', 'User')->get();

        return view('admin.home', compact('users'));
    }

    public function createAdmin()
    {
        return view('admin.user_admin_create');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role' => 'required',
            'NIK' => 'required|numeric|min:16',
            'tanggal_lahir' => 'required',
            'no_telp' => 'required|numeric|min:9',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan
        ];

        $user = new User($data);

        if ($user->save())
            return redirect()->route('super');

        return redirect()->back();
    }

    public function detail(User $user)
    {
        if (Auth::user()->role == 'User')
            return view('customer.warga_profile', compact('user'));

        return view('admin.user_admin_detail', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan
        ]);

        if (Auth::user()->role == 'User')
            return view('customer.warga_profile', compact('user'));
        elseif (Auth::user()->role == 'Super')
            return redirect()->route('super');
        return redirect()->route('home');
    }

    public function delete(User $user)
    {
        $user->delete();

        if (Auth::user()->role == 'Super')
            return redirect()->route('super');

        return redirect()->route('admin');
    }
}
