@extends('layouts.admin')

@section('page-header', 'Data Ibu Hamil')

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
                                    data-bs-target="#detail-ibuhamil">Detail</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-ibuhamil">Edit
                                    Data</button>
                            </li>
                            <li class="nav-item ms-auto">
                                <form action="{{ route('delete_data_ibu_hamil', $ibuhamil) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger btn-sm">Hapus Data</button>
                                </form>
                            </li>
                        </ul>
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active profile-overview" id="detail-ibuhamil">
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Nama Anak</div>
                                    <div class="col-lg-4 col-sm-6">{{ $ibuhamil->nama }}</div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Kehamilan ke-</div>
                                    <div class="col-lg-4 col-sm-6">{{ $ibuhamil->kehamilan_ke }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Usia Kandungan (bulan)</div>
                                    <div class="col-lg-4 col-sm-6">
                                        {{ $ibuhamil->umur_kehamilan }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Golongan Darah</div>
                                    <div class="col-lg-4 col-sm-6">{{ $ibuhamil->golongan_darah }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Lingkar Kepala (cm)</div>
                                    <div class="col-lg-4 col-sm-6">{{ $ibuhamil->tinggi_badan }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Berat Badan (Kg)</div>
                                    <div class="col-lg-4 col-sm-6">{{ $ibuhamil->berat_badan }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 col-sm-4 label">Tanggal Periksa</div>
                                    <div class="col-lg-4 col-sm-6">
                                        {{ date('d-m-Y', strtotime($ibuhamil->tanggal_periksa)) }}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="edit-ibuhamil">
                                <!-- Ibu Hamil Edit Form -->
                                <form action="{{ route('update_data_ibu_hamil', $ibuhamil) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-6 col-lg-4 col-form-label">Nama Ibu</label>
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
                                                value="{{ $ibuhamil->nama }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="kehamilan_ke" class="col-md-6 col-lg-4 col-form-label">Kehamilan ke-</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="kehamilan_ke" type="text" class="form-control"
                                                id="kehamilan_ke" value="{{ $ibuhamil->kehamilan_ke }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="umur_kehamilan" class="col-md-6 col-lg-4 col-form-label">Usia Kandungan (bulan)</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="umur_kehamilan" type="number" class="form-control" id="umur_kehamilan"
                                                value="{{ $ibuhamil->umur_kehamilan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="golongan_darah" class="col-md-6 col-lg-4 col-form-label">Golongan Darah</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="golongan_darah" type="text" class="form-control"
                                                id="golongan_darah" value="{{ $ibuhamil->golongan_darah }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tinggi_badan" class="col-md-6 col-lg-4 col-form-label">Tinggi
                                            Badan (cm)</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tinggi_badan" type="number" class="form-control"
                                                id="tinggi_badan" value="{{ $ibuhamil->tinggi_badan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="berat_badan" class="col-md-6 col-lg-4 col-form-label">Berat
                                            Badan (Kg)</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="berat_badan" type="number" class="form-control"
                                                id="berat_badan" value="{{ $ibuhamil->berat_badan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_periksa" class="col-md-6 col-lg-4 col-form-label">Tanggal
                                            Periksa</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tanggal_periksa" type="date" class="form-control"
                                                id="tanggal_periksa" value="{{ $ibuhamil->tanggal_periksa }}">
                                        </div>
                                    </div>
                                    <div class="row-cols-2 text-center">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                                <!-- End Ibuhamil Edit Form -->
                            </div>
                        </div>
                        <!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
