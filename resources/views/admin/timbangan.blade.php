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
                            <div class="d-row">
                                <button type="button" class="btn btn-primary btn-sm" onclick="dataexport('pdf')"><i
                                        class="bi bi-printer-fill"></i></button>
                                <button type="button" class="btn btn-success btn-sm"
                                    onclick="window.location='{{ route('create_timbangan') }}'"><i
                                        class="bi bi-plus-lg"></i></button>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
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
                                @foreach ($timbangan as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}</td>
                                        <td>{{ $data->umur }}</td>
                                        <td>{{ $data->nama_orangtua }}</td>
                                        <td>{{ $data->lingkar_kepala }}</td>
                                        <td>{{ $data->tinggi_badan }}</td>
                                        <td>{{ $data->berat_badan }}</td>
                                        <td>{{ date('d-m-Y', strtotime($data->tanggal_periksa)) }}</td>
                                        <td>
                                            <div class="d-flex flex-row gap-2">
                                                <form action="{{ route('show_timbangan', $data) }}" method="get">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                                            class="bi bi-search"></i></button>
                                                </form>
                                                <form action="{{ route('delete_timbangan', $data) }}" method="post">
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
