@extends('layouts.main')

@section('content')
    <div class="row">
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
    </div>
@endsection
