@extends('layouts.admin')

@section('page-header', 'Data Imunisasi')

@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Imunisasi</h5>
                    <form action="{{ route('update_imunisasi', $imunisasi) }}" method="post">
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
                                <input type="text" name="nama" class="form-control" id="name" value="{{ $imunisasi->nama }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birth" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" class="form-control" id="birth" value="{{ $imunisasi->tanggal_lahir }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="imunisasi" class="col-sm-2 col-form-label">Jenis Imunisasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="jenis_imunisasi" class="form-control" id="imunisasi" value="{{ $imunisasi->jenis_imunisasi }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Tanggal Imunisasi</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_imunisasi" class="form-control" id="date" value="{{ $imunisasi->tanggal_imunisasi }}">
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
