@extends('layouts.admin')

@section('page-header', 'Admin')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Daftar Admin</h5>
                            <button class="btn btn-success btn-sm" onclick="window.location='{{ route('create_admin') }}'"
                                type="button">Create</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->NIK ?? 'Note set yet' }}</td>
                                            <td>{{ date('d-m-Y', strtotime($user->tanggal_lahir ?? '')) }}</td>
                                            <td>{{ $user->no_telp ?? 'Not set yet' }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="window.location='{{ route('user_detail', $user) }}'"><i
                                                        class="bi bi-pencil-fill"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="window.location='{{ route('user_delete', $user) }}'"><i
                                                        class="bi bi-trash"></i></button>
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
