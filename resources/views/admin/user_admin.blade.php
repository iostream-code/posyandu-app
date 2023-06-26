@extends('layouts.admin')

@section('page-header', 'Admin')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Admin</h5>
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
                                    @isset($user->warga)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->warga->NIK }}</td>
                                            <td>{{ date('d-m-Y', strtotime($user->warga->tanggal_lahir)) }}</td>
                                            <td>{{ $user->warga->no_telp }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="window.location='{{ route('user_detail', $user) }}'"><i
                                                        class="bi bi-search"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="window.location='{{ route('user_delete', $user) }}'"><i
                                                        class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endisset
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
