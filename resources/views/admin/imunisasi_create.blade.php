@extends('layouts.admin')

@section('page-header', 'Data Imunisasi')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Imunisasi</h5>
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="NIK" class="form-control" id="nik">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birth" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" class="form-control" id="birth">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="imunisasi" class="col-sm-2 col-form-label">Jenis Imunisasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="jenis_imunisasi" class="form-control" id="imunisasi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_imunisasi" class="form-control" id="date">
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
    </section>
@endsection
