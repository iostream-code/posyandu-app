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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kehamilan Ke-</th>
                                    <th scope="col">Usia Kehamilan (bulan)</th>
                                    <th scope="col">Golongan Darah</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Berat badan</th>
                                    <th scope="col">Tanggal Kehamilan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ibu_hamil as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->kehamilan_ke }}</td>
                                        <td>{{ $data->umur_kehamilan }}</td>
                                        <td>{{ $data->golongan_darah }}</td>
                                        <td>{{ $data->tinggi_badan }}</td>
                                        <td>{{ $data->berat_badan }}</td>
                                        <td>{{ $data->tanggal_kehamilan }}</td>
                                        <td>
                                            <div class="d-flex flex-row gap-2">
                                                <form action="{{ route('show_data_ibu_hamil', $data) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                                            class="bi bi-search"></i></button>
                                                </form>
                                                <form action="{{ route('delete_data_ibu_hamil', $data) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
