@extends('layouts.admin')

@section('page-header', 'Data Imunisasi')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Imunisasi {{ $user->name }}</h5>
                            <button type="button" class="btn btn-success btn-sm"
                                onclick="window.location='{{ route('edit_imunisasi', $imunisasi) }}'">Edit Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Imunisasi</th>
                                    <th scope="col">Tanggal Imunisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $imunisasi->nama }}</td>
                                    <td>{{ date('d-m-Y', strtotime($imunisasi->tanggal_lahir)) }}</td>
                                    <td>{{ $imunisasi->jenis_imunisasi }}</td>
                                    <td>{{ date('d-m-Y', strtotime($imunisasi->tanggal_imunisasi)) }}</td>
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
