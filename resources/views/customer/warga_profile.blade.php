@extends('layouts.main')

@section('content')
    <div class="row g-3">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/img/profile-img.png') }}" alt="Profile" class="rounded-circle">
                    <h3>{{ $user->name }}</h3>
                    <h6>{{ $user->pekerjaan }}</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Details</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profile</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Email</div>
                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">NIK</div>
                                <div class="col-lg-9 col-md-8">{{ $user->NIK }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                <div class="col-lg-9 col-md-8">
                                    {{ date('d-m-Y', strtotime($user->tanggal_lahir)) }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8">{{ $user->alamat }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                <div class="col-lg-9 col-md-8">{{ $user->pekerjaan }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">No. Telepon</div>
                                <div class="col-lg-9 col-md-8">{{ $user->no_telp }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                            </div>
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form action="{{ route('update_warga', $user) }}" method="post">
                                @csrf
                                @method('patch')
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="fullName"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="NIK" type="text" class="form-control" id="Nik"
                                            value="{{ $user->NIK }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="birth" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="tanggal_lahir" type="date" class="form-control" id="birth"
                                            value="{{ $user->tanggal_lahir }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="alamat" type="text" class="form-control" id="Address"
                                            value="{{ $user->alamat }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="pekerjaan" type="text" class="form-control" id="Address"
                                            value="{{ $user->pekerjaan }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nomor
                                        Telepon</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="no_telp" type="text" class="form-control" id="Phone"
                                            value="{{ $user->no_telp }}">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </form>
                            <!-- End Profile Edit Form -->
                        </div>
                    </div>
                    <!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
    </div>
@endsection
