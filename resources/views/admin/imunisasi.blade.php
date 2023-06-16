@extends('layouts.admin')

@section('page-header', 'Data Imunisasi')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Imunisasi User</h5>
                            <button type="button" class="btn btn-success btn-sm"
                                onclick="window.location='{{ route('create_imunisasi') }}'">Tambah Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Imunisasi</th>
                                    <th scope="col">Tanggal Imunisasi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Citra Putri</td>
                                    <td>2001-05-25</td>
                                    <td>Campak, Polio, BCG</td>
                                    <td>2023-05-25</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-search"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
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
