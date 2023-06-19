@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h3 class="cad-title">Halo, {{ $user->name }}</h3>
                <button type="button" class="btn btn-success btn-sm" onclick="window.location='{{ route('edit_warga', $user) }}'">Edit</button>
            </div>
            <p>{{ $user->email }}</p>
            <p>NIK : {{ $user->warga->NIK }}</p>
            <p>Tanggl lahir : {{ $user->warga->tanggal_lahir }}</p>
            <p>No Telepon : {{ $user->warga->no_telp }}</p>
        </div>
    </div>
@endsection
