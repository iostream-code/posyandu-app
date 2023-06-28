@extends('layouts.admin')

@section('page-header', 'Users')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar User</h5>
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
                                            <td>{{ $user->NIK }}</td>
                                            <td>{{ $user->tanggal_lahir }}</td>
                                            <td>{{ $user->no_telp }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="window.location='{{ route('user_detail', $user) }}'"><i
                                                        class="bi bi-search"></i></button>
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
