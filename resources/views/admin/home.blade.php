@extends('layouts.admin')

@section('page-header', 'Users')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Users <span>| Until now</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>30</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Customers Card -->
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar User</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
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
                                        <td>3578012236578004</td>
                                        <td>2023-05-25</td>
                                        <td>
                                            @if (isset($user->no_telp))
                                                {{ $user->no_telp }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" onclick="window.location='{{ route('user_detail', $user) }}'"><i class="bi bi-search"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="window.location='{{ route('user_delete', $user) }}'"><i class="bi bi-trash"></i></button>
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
