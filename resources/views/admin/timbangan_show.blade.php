@extends('layouts.admin')

@section('page-header', 'Timbangan')

@section('content')
    <section class="section">
        <div class="row">
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
                                    data-bs-target="#detail-timbangan">Detail</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-timbangan">Edit
                                    Data</button>
                            </li>
                            <li class="nav-item ms-auto">
                                <button class="btn btn-outline-danger btn-sm">Hapus Data</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active profile-overview" id="detail-timbangan">
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Nama Anak</div>
                                    <div class="col-lg-4 col-sm-6">{{ $timbangan->nama }}</div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Tanggal Lahir</div>
                                    <div class="col-lg-4 col-sm-6">{{ date('d-m-Y', strtotime($timbangan->tanggal_lahir)) }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Usia</div>
                                    <div class="col-lg-4 col-sm-6">{{ $timbangan->umur }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Nama Orang Tua</div>
                                    <div class="col-lg-4 col-sm-6">{{ $timbangan->nama_orangtua }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Lingkar Kepala</div>
                                    <div class="col-lg-4 col-sm-6">{{ $timbangan->lingkar_kepala }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Tinggi Badan</div>
                                    <div class="col-lg-4 col-sm-6">{{ $timbangan->tinggi_badan }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Berat Badan</div>
                                    <div class="col-lg-4 col-sm-6">{{ $timbangan->berat_badan }}
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-sm-4 label">Tanggal Periksa</div>
                                    <div class="col-lg-4 col-sm-6">
                                        {{ date('d-m-Y', strtotime($timbangan->tanggal_periksa)) }}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="edit-timbangan">
                                <!-- Timbangan Edit Form -->
                                <form action="{{ route('update_warga', $user) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-6 col-lg-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="name" type="text" class="form-control" id="fullName"
                                                value="{{ $timbangan->nama }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_lahir" class="col-md-6 col-lg-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir"
                                                value="{{ $timbangan->tanggal_lahir }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="usia" class="col-md-6 col-lg-4 col-form-label">Usia</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="umur" type="number" class="form-control" id="usia"
                                                value="{{ $timbangan->umur }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama_orangtua" class="col-md-6 col-lg-4 col-form-label">Nama Orang Tua</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="nama_orangtua" type="text" class="form-control" id="nama_orangtua"
                                                value="{{ $timbangan->nama_orangtua }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="lingkar_kepala" class="col-md-6 col-lg-4 col-form-label">Lingkar Kepala</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="lingkar_kepala" type="number" class="form-control" id="lingkar_kepala"
                                                value="{{ $timbangan->lingkar_kepala }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tinggi_badan" class="col-md-6 col-lg-4 col-form-label">Tinggi Badan</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tinggi_badan" type="number" class="form-control" id="tinggi_badan"
                                                value="{{ $timbangan->tinggi_badan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="berat_badan" class="col-md-6 col-lg-4 col-form-label">Berat Badan</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="berat_badan" type="number" class="form-control" id="berat_badan"
                                                value="{{ $timbangan->berat_badan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_periksa" class="col-md-6 col-lg-4 col-form-label">Tanggal Periksa</label>
                                        <div class="col-md-8 col-lg-8">
                                            <input name="tanggal_periksa" type="date" class="form-control" id="tanggal_periksa"
                                                value="{{ $timbangan->tanggal_periksa }}">
                                        </div>
                                    </div>
                                    <div class="row-cols-2 text-center">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                                <!-- End Timbangan Edit Form -->
                            </div>
                        </div>
                        <!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title">Data Timbangan Anak {{ $user->name }}</h5>
                            <button type="button" class="btn btn-success btn-sm"
                                onclick="window.location='{{ route('edit_timbangan', $timbangan) }}'">Edit
                                Data</button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Nama Ayah/Ibu</th>
                                    <th scope="col">Lingkar Kepala</th>
                                    <th scope="col">Tinggi Badan</th>
                                    <th scope="col">Berat Badan</th>
                                    <th scope="col">Tanggal Periksa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $timbangan->nama }}</td>
                                    <td>{{ date('d-m-Y', strtotime($timbangan->tanggal_lahir)) }}</td>
                                    <td>{{ $timbangan->umur }}</td>
                                    <td>{{ $timbangan->nama_orangtua }}</td>
                                    <td>{{ $timbangan->lingkar_kepala }}</td>
                                    <td>{{ $timbangan->tinggi_badan }}</td>
                                    <td>{{ $timbangan->berat_badan }}</td>
                                    <td>{{ date('d-m-Y', strtotime($timbangan->tanggal_periksa)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
