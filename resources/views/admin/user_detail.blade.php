@extends('layouts.admin')

@section('page-header', 'Data Warga')

@section('content')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/img/profile-img.png') }}" alt="Profile" class="rounded-circle">
                        <h3>{{ $user->name }}</h3>
                        <h6>{{ $user->warga->pekerjaan }}</h6>
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
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Status</div>
                                    <div class="col-lg-9 col-md-8">
                                        @if ($user->role == 'Super')
                                            Ketua Kader
                                        @elseif ($user->role == 'Admin')
                                            Kader
                                        @else
                                            Anggota
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">NIK</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->warga->NIK }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ date('d-m-Y', strtotime($user->warga->tanggal_lahir)) }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->warga->alamat }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->warga->pekerjaan }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. Telepon</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->warga->no_telp }}</div>
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
                                    {{-- <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                            IPicture</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="{{ asset('assets/img/profile-img.png') }}" alt="Profile"
                                                width="190">
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm"
                                                    title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"
                                                    title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="fullName"
                                                value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    @if (Auth::user()->role == 'Super')
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Status</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="role"
                                                        id="anggota" value="Anggota">
                                                    <label class="form-check-label" for="anggota">
                                                        Anggota
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="role"
                                                        id="kader" value="Admin">
                                                    <label class="form-check-label" for="kader">
                                                        Kader
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="role"
                                                        id="ketua" value="Super">
                                                    <label class="form-check-label" for="ketua">
                                                        Ketua Kader
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
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
                                                value="{{ $user->warga->NIK }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="birth" class="col-md-4 col-lg-3 col-form-label">Tanggal
                                            Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggal_lahir" type="date" class="form-control"
                                                id="birth" value="{{ $user->warga->tanggal_lahir }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="alamat" type="text" class="form-control" id="Address"
                                                value="{{ $user->warga->alamat }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="pekerjaan" type="text" class="form-control" id="Address"
                                                value="{{ $user->warga->pekerjaan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Nomor
                                            Telepon</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="no_telp" type="text" class="form-control" id="Phone"
                                                value="{{ $user->warga->no_telp }}">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
