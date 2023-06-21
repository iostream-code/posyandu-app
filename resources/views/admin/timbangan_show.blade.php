@extends('layouts.admin')

@section('page-header', 'Data Ibu Hamil')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Timbangan Anak {{ $user->name }}</h5>
                            <button type="button" class="btn btn-success btn-sm"
                                onclick="window.location='{{ route('edit_timbangan', $timbangan) }}'">Edit
                                Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Nama Ayah/Ibu</th>
                                    <th scope="col">Lingkar Kepala</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Berat Badan</th>
                                    <th scope="col">Tanggal Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $timbangan->nama }}</td>
                                    <td>{{ date('d-m-Y', strtotime($timbangan->tanggal_lahir)) }}</td>
                                    <td>{{ $timbangan->umur }}</td>
                                    <td>{{ $timbangan->nama_orangtua }}</td>
                                    <td>{{ $timbangan->lingkar_kepala }}</td>
                                    <td>{{ $timbangan->tinggi_badan }}</td>
                                    <td>{{ $timbangan->berat_badan }}</td>
                                    <td>{{ date('d-m-Y', strtotime($timbangan->tanggal_periksa)) }}</td>
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
