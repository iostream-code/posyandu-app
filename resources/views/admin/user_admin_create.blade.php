@extends('layouts.admin')

@section('page-header', 'Data Warga')

@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/img/profile-img.png') }}" alt="Profile" class="rounded-circle">
                    <h3>User Baru</h3>
                    <h6>Role Admin</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#create-user">Create New
                                Admin</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-fill">Fill
                                Profile</button>
                        </li>
                    </ul>
                    <form action="{{ route('store_admin') }}" method="post">
                        @csrf
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade profile-edit pt-3" id="create-user">
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="fullName">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="role" type="text" class="form-control" id="role" value="Admin">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade profile-edit pt-3" id="profile-fill">
                                <div class="row mb-3">
                                    <label for="Nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="NIK" type="text" class="form-control" id="Nik">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="birth" class="col-md-4 col-lg-3 col-form-label">Tanggal
                                        Lahir</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="tanggal_lahir" type="date" class="form-control" id="birth">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="alamat" type="text" class="form-control" id="Address">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="pekerjaan" type="text" class="form-control" id="Address">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nomor
                                        Telepon</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="no_telp" type="text" class="form-control" id="Phone">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Create New</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End Bordered Tabs -->
        </div>
    </div>
    </div>
    </div>
</section>
@endsection