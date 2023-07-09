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
                            <div class="d-row">
                                <button type="button" class="btn btn-primary btn-sm"
                                    onclick="window.location='{{ route('cetak_imunisasi') }}'"><i
                                        class="bi bi-printer-fill"></i></button>
                                <button type="button" class="btn btn-success btn-sm"
                                    onclick="window.location='{{ route('create_imunisasi') }}'"><i
                                        class="bi bi-plus-lg"></i></button>
                            </div>
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
                                @foreach ($imunisasi as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}</td>
                                        <td>{{ $data->jenis_imunisasi }}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->tanggal_imunisasi)) }}</td>
                                        <td>
                                            <div class="d-flex flex-row gap-2">
                                                <form action="{{ route('show_imunisasi', $data) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                                            class="bi bi-pencil-fill"></i></button>
                                                </form>
                                                <form action="{{ route('delete_imunisasi', $data) }}" method="post">
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
