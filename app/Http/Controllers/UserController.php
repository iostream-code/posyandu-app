<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Warga;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function admin()
    {
        $users = User::where('role', 'User')->get();

        return view('admin.home', compact('users'));
    }

    public function super()
    {
        $users = User::where('role', '!=', 'Super')->get();

        return view('admin.user_admin', compact('users'));
    }

    public function createAdmin()
    {
        return view('admin.user_admin_create');
    }

    public function storeAdmin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user == '') {
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->save();

            return redirect()->route('create_admin');
        } else {
            $warga = new Warga([
                'user_id' => $request->user_id,
                'NIK' => $request->NIK,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan
            ]);
            $warga->save();
        }
        return redirect()->route('super');
    }

    public function detail(User $user)
    {
        return view('admin.user_detail', compact('user'));
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('admin');
    }

    public function createWarga()
    {
        return view('auth.warga_create');
    }

    public function storeWarga(Request $request)
    {
        $warga = new Warga([
            'user_id' => $request->user_id,
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan
        ]);
        $warga->save();

        return redirect()->route('login');
    }

    public function showWarga()
    {
        $user = User::where('id', Auth::id())->first();

        if (isset($user->warga))
            return view('customer.warga_profile', compact('user'));
        return redirect()->route('create_warga');
    }

    public function editWarga(User $user)
    {
        return view('customer.warga_edit', compact('user'));
    }

    public function updateWarga(User $user, Request $request)
    {
        if (Auth::user()->role != 'User') {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        $user->warga->update([
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan
        ]);

        return redirect()->route('profile_warga');
    }
}
