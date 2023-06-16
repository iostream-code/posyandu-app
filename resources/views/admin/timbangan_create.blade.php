@extends('layouts.admin')

@section('page-header', 'Data Timbangan')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Timbangan</h5>
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="umur" class="col-sm-2 col-form-label">Usia</label>
                            <div class="col-sm-10">
                                <input type="number" name="umur" class="form-control" id="umur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="orangtua" class="col-sm-2 col-form-label">Nama Ayah/Ibu</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_orangtua" class="form-control" id="orangtua">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lingkar_kepala" class="col-sm-2 col-form-label">Lingkar Kepala</label>
                            <div class="col-sm-10">
                                <input type="number" name="lingkar_kepala" class="form-control" id="lingkar_kepala">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tinggi_bada" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-10">
                                <input type="number" name="tinggi_bada" class="form-control" id="tinggi_bada">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-10">
                                <input type="number" name="berat_badan" class="form-control" id="berat_badan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Tanggal Periksa</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_periksa" class="form-control" id="date">
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
