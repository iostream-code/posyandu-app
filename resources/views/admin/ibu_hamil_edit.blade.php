@extends('layouts.admin')

@section('page-header', 'Data Ibu Hamil')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Ibu Hamil</h5>
                    <form action="{{ route('update_data_ibu_hamil', $ibuhamil) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">User ID</label>
                            <div class="col-sm-10">
                                <select name="user_id" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Anggota Posyandu</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="name" value="{{ $ibuhamil->nama }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kehamilan_ke" class="col-sm-2 col-form-label">Kehamilan Ke-</label>
                            <div class="col-sm-10">
                                <input type="number" name="kehamilan_ke" class="form-control" id="kehamilan_ke" value="{{ $ibuhamil->kehamilan_ke }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="usia_kandungan" class="col-sm-2 col-form-label">Usia Kehamilan (bulan)</label>
                            <div class="col-sm-10">
                                <input type="number" name="usia_kandungan" class="form-control" id="usia_kandungan" value="{{ $ibuhamil->umur_kehamilan }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="golongan_darah" class="col-sm-2 col-form-label">Golongan Darah</label>
                            <div class="col-sm-10">
                                <input type="text" name="golongan_darah" class="form-control" id="golongan_darah" value="{{ $ibuhamil->golongan_darah }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan (cm)</label>
                            <div class="col-sm-10">
                                <input type="number" name="tinggi_badan" class="form-control" id="tinggi_badan" value="{{ $ibuhamil->tinggi_badan }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan (Kg)</label>
                            <div class="col-sm-10">
                                <input type="number" name="berat_badan" class="form-control" id="berat_badan" value="{{ $ibuhamil->berat_badan }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Tanggal Kehamilan</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_kehamilan" class="form-control" id="date" value="{{ $ibuhamil->tanggal_kehamilan }}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
