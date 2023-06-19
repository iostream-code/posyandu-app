@extends('layouts.admin')

@section('page-header', 'Data Ibu Hamil')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Ibu Hamil</h5>
                            <button type="button" class="btn btn-success btn-sm"
                                onclick="window.location='{{ route('create_data_ibu_hamil') }}'">Tambah Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kehamilan Ke-</th>
                                    <th scope="col">Usia Kehamilan (bulan)</th>
                                    <th scope="col">Golongan Darah</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Berat badan</th>
                                    <th scope="col">Tanggal Tanggal Kehamilan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Citra Putri</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>AB</td>
                                    <td>156 cm</td>
                                    <td>60 Kg</td>
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
