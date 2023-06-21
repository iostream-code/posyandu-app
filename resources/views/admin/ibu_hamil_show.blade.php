@extends('layouts.admin')

@section('page-header', 'Data Ibu Hamil')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Kehamilan {{ $user->name }}</h5>
                            <button type="button" class="btn btn-success btn-sm" onclick="window.location='{{ route('edit_data_ibu_hamil', $ibuhamil) }}'">Edit
                                Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kehamilan Ke-</th>
                                    <th scope="col">Usia Kehamilan (bulan)</th>
                                    <th scope="col">Golongan Darah</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Berat badan</th>
                                    <th scope="col">Tanggal Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $ibuhamil->nama }}</td>
                                    <td>{{ $ibuhamil->kehamilan_ke }}</td>
                                    <td>{{ $ibuhamil->umur_kehamilan }}</td>
                                    <td>{{ $ibuhamil->golongan_darah }}</td>
                                    <td>{{ $ibuhamil->tinggi_badan }}</td>
                                    <td>{{ $ibuhamil->berat_badan }}</td>
                                    <td>{{ date('d-m-Y', strtotime($ibuhamil->tanggal_periksa)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
