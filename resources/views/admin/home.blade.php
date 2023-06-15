@extends('layouts.admin')

@section('content')
    <div class="section dashboard">
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
                            <h5 class="card-title">Customers <span>| This Year</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>1244</h6>
                                    <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">decrease</span>
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
                                    <th scope="col">id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>Citra Putri</td>
                                    <td>3578769018980</td>
                                    <td>2023-05-25</td>
                                    <td>087771628144</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-search"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>Citra Putri</td>
                                    <td>3578769018980</td>
                                    <td>2023-05-25</td>
                                    <td>087771628144</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-search"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>Citra Putri</td>
                                    <td>3578769018980</td>
                                    <td>2023-05-25</td>
                                    <td>087771628144</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-search"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1</td>
                                    <td>Citra Putri</td>
                                    <td>3578769018980</td>
                                    <td>2023-05-25</td>
                                    <td>087771628144</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-search"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
