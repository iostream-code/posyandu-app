@extends('layouts.admin')

@section('page-header', 'Data Timbangan')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Timbangan User</h5>
                            <button type="button" class="btn btn-success btn-sm"
                                onclick="window.location='{{ route('create_timbangan') }}'">Tambah Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Nama Ayah/Ibu</th>
                                    <th scope="col">Lingkar Kepala</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Berat Badan</th>
                                    <th scope="col">Tanggal Periksa</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Citra Putri</td>
                                    <td>5 thn</td>
                                    <td>Aisyah</td>
                                    <td>45 cm</td>
                                    <td>32 cm</td>
                                    <td>2,2 Kg</td>
                                    <td>23/05/2023</td>
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
