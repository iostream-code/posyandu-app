@extends('layouts.pdf')

@section('header', 'Data Ibu Hamil')

@section('content')
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
            @foreach ($ibuHamil as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->kehamilan_ke }}</td>
                    <td>{{ $data->umur_kehamilan }}</td>
                    <td>{{ $data->golongan_darah }}</td>
                    <td>{{ $data->tinggi_badan }}</td>
                    <td>{{ $data->berat_badan }}</td>
                    <td>{{ date('d-m-Y', strtotime($data->tanggal_periksa)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
