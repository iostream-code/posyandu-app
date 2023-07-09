@extends('layouts.main')

@section('content')
    <div class="row">
        <table class="table">
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
                </tr>
            </thead>
            <tbody>
                @foreach ($timbangan as $data)
                    <tr class="table-light">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}</td>
                        <td>{{ $data->umur }}</td>
                        <td>{{ $data->nama_orangtua }}</td>
                        <td>{{ $data->lingkar_kepala }}</td>
                        <td>{{ $data->tinggi_badan }}</td>
                        <td>{{ $data->berat_badan }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->tanggal_periksa)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
