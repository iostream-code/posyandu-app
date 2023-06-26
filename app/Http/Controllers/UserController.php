<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Warga;

class UserController extends Controller
{
    public function admin()
    {
        $users = User::where('is_admin', false)->get();

        return view('admin.home', compact('users'));
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
        if (Auth::user()->is_admin) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'is_admin' => $request->is_admin
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
