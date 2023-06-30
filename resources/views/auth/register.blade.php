@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            <span class="d-none d-lg-block">Posyandu Dahlia 1</span>
                        </a>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-3">
                                <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                <p class="text-center small">Masukkan data untuk membuat sebuah akun</p>
                            </div>
                            <form class="row g-3 needs-validation" action="{{ route('store') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <div class="row gx-2">
                                        <div class="col-6">
                                            <label for="name" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="name"
                                                @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="row gx-2">
                                        <div class="col-6">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" name="NIK" class="form-control" id="nik">
                                        </div>
                                        <div class="col-6">
                                            <label for="date" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="col-12">
                                    <div class="row gx-2">
                                        <div class="col-6">
                                            <label for="telp" class="form-label">Nomor Telepon</label>
                                            <input type="text" name="no_telp" class="form-control" id="telp">
                                        </div>
                                        <div class="col-6">
                                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-3">
                                    <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="small mb-0">Sudah punya akun? <a href="{{ route('login') }}">Masuk
                                            disini!</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
