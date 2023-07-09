@extends('layouts.admin')

@section('page-header', 'Data Imunisasi')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#detail-imunisasi">Detail</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-imunisasi">Edit
                                    Data</button>
                            </li>
                            <li class="nav-item ms-auto">
                                <form action="{{ route('delete_imunisasi', $imunisasi) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger btn-sm">Hapus Data</button>
                                </form>
                            </li>
                        </ul>
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active profile-overview" id="detail-imunisasi">
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Nama</div>
                                    <div class="col-lg-4 col-sm-6">{{ $imunisasi->nama }}</div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Tanggal Lahir</div>
                                    <div class="col-lg-4 col-sm-6">
                                        {{ date('d-m-Y', strtotime($imunisasi->tanggal_periksa)) }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Jenis Imunisasi</div>
                                    <div class="col-lg-4 col-sm-6">{{ $imunisasi->jenis_imunisasi }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Tanggal Imunisasi</div>
                                    <div class="col-lg-4 col-sm-6">
                                        {{ date('d-m-Y', strtotime($imunisasi->tanggal_imunisasi)) }}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="edit-imunisasi">
                                <!-- Imunisasi Edit Form -->
                                <form action="{{ route('update_imunisasi', $imunisasi) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-6 col-lg-4 col-form-label">Nama Anggota</label>
                                        <div class="col-md-8 col-lg-8">
                                            <select name="user_id" class="form-select" aria-label="Default select example">
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-6 col-lg-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="nama" type="text" class="form-control" id="fullName"
                                                value="{{ $imunisasi->nama }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_lahir" class="col-md-6 col-lg-4 col-form-label">Tanggal
                                            Lahir</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tanggal_lahir" type="date" class="form-control"
                                                id="tanggal_lahir" value="{{ $imunisasi->tanggal_lahir }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="jenis_imunisasi" class="col-md-6 col-lg-4 col-form-label">Jenis
                                            Imunisasi</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="jenis_imunisasi" type="text" class="form-control"
                                                id="jenis_imunisasi" value="{{ $imunisasi->jenis_imunisasi }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_imunisasi" class="col-md-6 col-lg-4 col-form-label">Tanggal
                                            Imunisasi</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tanggal_imunisasi" type="date" class="form-control"
                                                id="tanggal_imunisasi" value="{{ $imunisasi->tanggal_imunisasi }}">
                                        </div>
                                    </div>
                                    <div class="row-cols-2 text-center">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                                <!-- End Imunisasi Edit Form -->
                            </div>
                        </div>
                        <!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
