<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\IbuHamil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;

class IbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role != 'User') {
            $ibu_hamil = IbuHamil::all();

            return view('admin.ibu-hamil', compact('ibu_hamil'));
        } else {
            $ibu_hamil = IbuHamil::where('id', Auth::id())->get();

            return view('customer.data_ibu_hamil', compact('ibu_hamil'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'User')->get();

        return view('admin.ibu-hamil_create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        IbuHamil::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'kehamilan_ke' => $request->kehamilan_ke,
            'umur_kehamilan' => $request->usia_kandungan,
            'golongan_darah' => $request->golongan_darah,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'tanggal_periksa' => $request->tanggal_periksa
        ]);

        return redirect()->route('data_ibu_hamil');
    }

    /**
     * Display the specified resource.
     */
    public function show(IbuHamil $ibuhamil)
    {
        $user = User::where('id', $ibuhamil->user_id)->first();

        return view('admin.ibu_hamil_show', compact('ibuhamil', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IbuHamil $ibuhamil)
    {
        $users = User::where('role', 'User')->get();

        return view('admin.ibu_hamil_edit', compact('ibuhamil', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IbuHamil $ibuhamil)
    {
        $ibuhamil->update([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'kehamilan_ke' => $request->kehamilan_ke,
            'umur_kehamilan' => $request->usia_kandungan,
            'golongan_darah' => $request->golongan_darah,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'tanggal_periksa' => $request->tanggal_kehamilan
        ]);

        return redirect()->route('show_data_ibu_hamil', compact('ibuhamil'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(IbuHamil $ibuhamil)
    {
        $ibuhamil->delete();

        return redirect()->route('data_ibu_hamil');
    }

    public function pdfExport()
    {
        $ibuHamil = IbuHamil::all();

        $pdf = new Dompdf();
        $pdf->loadHtml(view('admin.ibu-hamil_pdf', compact('ibuHamil')));
        $pdf->setPaper('a4', 'potrait');
        $pdf->render();

        return $pdf->stream('data-ibu-hamil.pdf');
    }
}
