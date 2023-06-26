@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            <span class="d-none d-lg-block">Posyandu Dahlia 1</span>
                        </a>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Lengkapi Data</h5>
                                    <p class="text-center small">Masukkan data untuk melanjutkan</p>
                                </div>
                                <form class="row g-3 needs-validation" action="{{ route('store_warga') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="user_id" class="form-control" id="id" value="{{ $user->id }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="NIK" class="form-control" id="nik">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_lahir" class="form-control" id="date">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="no_telp" class="form-control" id="telp">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" class="form-control" id="alamat">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
