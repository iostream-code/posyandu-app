<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Timbangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->is_admin) {
            $timbangan = Timbangan::all();

            return view('admin.timbangan', compact('timbangan'));
        } else {
            $timbangan = Timbangan::where('id', Auth::id())->get();

            return view('customer.data_timbangan', compact('timbangan'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('is_admin', false)->get();

        return view('admin.timbangan_create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Timbangan::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
            'nama_orangtua' => $request->nama_orangtua,
            'lingkar_kepala' => $request->lingkar_kepala,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'tanggal_periksa' => $request->tanggal_periksa
        ]);

        return redirect()->route('data_timbangan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timbangan $timbangan)
    {
        $user = User::where('id', $timbangan->user_id)->first();

        return view('admin.timbangan_show', compact('timbangan', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timbangan $timbangan)
    {
        $users = User::where('is_admin', false)->get();

        return view('admin.timbangan_edit', compact('timbangan', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timbangan $timbangan)
    {
        $timbangan->update([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
            'nama_orangtua' => $request->nama_orangtua,
            'lingkar_kepala' => $request->lingkar_kepala,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'tanggal_periksa' => $request->tanggal_periksa
        ]);

        return redirect()->route('show_timbangan', compact('timbangan'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Timbangan $timbangan)
    {
        $timbangan->delete();

        return redirect()->route('timbangan');
    }
}
