@extends('layouts.main')

@section('content')
    <div class="row">
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
                    <th scope="col">Tanggal Periksa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ibu_hamil as $data)
                    <tr class="table-light">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kehamilan_ke }}</td>
                        <td>{{ $data->umur_kehamilan }}</td>
                        <td>{{ $data->golongan_darah }}</td>
                        <td>{{ $data->tinggi_badan }}</td>
                        <td>{{ $data->berat_badan }}</td>
                        <td>{{ $data->tanggal_periksa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
