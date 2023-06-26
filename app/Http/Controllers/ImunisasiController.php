<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->is_admin) {
            $imunisasi = Imunisasi::all();

            return view('admin.imunisasi', compact('imunisasi'));
        } else {
            $imunisasi = Imunisasi::where('user_id', Auth::id())->get();

            return view('customer.data_imunisasi', compact('imunisasi'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('is_admin', false)->get();

        return view('admin.imunisasi_create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Imunisasi::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_imunisasi' => $request->jenis_imunisasi,
            'tanggal_imunisasi' => $request->tanggal_imunisasi,
        ]);

        return redirect()->route('data_imunisasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Imunisasi $imunisasi)
    {
        $user = User::where('id', $imunisasi->user_id)->first();

        return view('admin.imunisasi_show', compact('imunisasi', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imunisasi $imunisasi)
    {
        $users = User::where('is_admin', false)->get();

        return view('admin.imunisasi_edit', compact('imunisasi', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imunisasi $imunisasi)
    {
        $imunisasi->update([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_imunisasi' => $request->jenis_imunisasi,
            'tanggal_imunisasi' => $request->tanggal_imunisasi,
        ]);

        return redirect()->route('show_imunisasi', compact('imunisasi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Imunisasi $imunisasi)
    {
        $imunisasi->delete();

        return redirect()->route('data_imunisasi');
    }

    public function pdfView()
    {
        $imunisasi = Imunisasi::all()->first()->get();

        return view('admin.imunisasi_pdf', compact('imunisasi'));
    }

    public function pdfExport()
    {
        $imunisasi = Imunisasi::all()->first();

        $data = [
            'nama' => $imunisasi->nama,
            'tanggal_lahir' => $imunisasi->tanggal_lahir,
            'jenis_imunisasi' => $imunisasi->jenis_imunisasi,
            'tanggal_imunisasi' => $imunisasi->tanggal_imunisasi,
        ];

        view()->share('imunisasi', $data);
        $pdf = PDF::loadview('imunisasi_pdf', $data);

        $pdf->stream();

        // $pdf = PDF::loadview('imunisasi_pdf', $data);
        // return $pdf->download('rekap-imunisasi.pdf');
    }
}
