@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            <span class="d-none d-lg-block">Posyandu Dahlia 1</span>
                        </a>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                <p class="text-center small">Masukkan data untuk membuat sebuah akun</p>
                            </div>
                            <form class="row g-3 needs-validation" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name"
                                        @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                                        required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                        required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                    {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                                </div>
                                <div class="col-12">
                                    <label for="password-confirm" class="form-label">Masukkan Ulang Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password-confirm" required autocomplete="new-password">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Lanjutkan</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Sudah punya akun? <a href="{{ route('login') }}">Masuk disini!</a>
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
