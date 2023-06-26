@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lengkapi Data Diri</h5>
                <form action="{{ route('store_warga') }}" method="post">
                    @csrf
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
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
