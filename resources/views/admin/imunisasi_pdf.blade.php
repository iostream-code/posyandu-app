@extends('layouts.file')

@section('title', 'Print Data Imunisasi')

@section('content')
    <h5>Data Imunisasi</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Imunisasi</th>
                <th scope="col">Tanggal Imunisasi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($imunisasi->nama) --}}
            @foreach ($imunisasi as $data)
                <tr class="table-light">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}</td>
                    <td>{{ $data->jenis_imunisasi }}</td>
                    <td>{{ date('d-m-Y', strtotime($data->tanggal_imunisasi)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" onclick="window.location='{{ route('print_imunisasi') }}'" class="btn btn-primary btn-sm">Cetak</button>
@endsection
