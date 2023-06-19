@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lengkapi Data Diri</h5>
                <form action="{{ route('update_warga', $user) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="NIK" class="form-control" id="nik" value="{{ $user->warga->NIK }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" class="form-control" id="date" value="{{ $user->warga->tanggal_lahir }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_telp" class="form-control" id="telp" value="{{ $user->warga->no_telp }}">
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
@endsection
