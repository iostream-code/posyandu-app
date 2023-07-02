<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data))
            return redirect('home')->with('Selamat Datang ' . Auth::user()->name, 'Login berhasil!');

        Alert::error('Login gagal!', 'Silahkan periksa kembali email dan password Anda');

        return redirect()->back();
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
                'NIK' => 'required|numeric|min:16',
                'tanggal_lahir' => 'required',
                'no_telp' => 'required|numeric',
                'alamat' => 'required',
                'pekerjaan' => 'required'
            ],[
                'password.min' => 'Password minimal 8 karakter!',
                'NIK.required' => 'NIK wajib diisi!',
                'NIK.numeric' => 'NIK harus berupa angka!',
                'NIK.min' => 'NIK minimal 16 karakter!',
                'tanggal_lahir.required' => 'Tanggal lahir harus diisi!',
                'no_telp.required' => 'Nomor telepon wajib diisi!',
                'no_telp.numeric' => 'Nomor harus berupa angka!',
                'alamat.required' => 'Alamat harus diisi!',
                'pekerjaan.required' => 'Pekerjaan harus diisi!',
            ]
        );

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'NIK' => $request->NIK,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan
        ]);

        if ($user->save()) {
            Alert::success('Berhasil mendaftar!', 'Lanjutkan untuk melengkapi data diri');

            return redirect()->route('home');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('dashboard');
    }
}
