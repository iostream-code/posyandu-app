@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <div class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">Posyandu Dahlia 1</span>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
                                <p class="text-center small">Masukkan email dan password Anda!</p>
                            </div>
                            <form class="row g-3 needs-validation" action="{{ route('auth') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Belum punya akun? <a href="{{ route('register') }}">Buat
                                            disini</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
