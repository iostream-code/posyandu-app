@extends('layouts.main')

@section('content')
    <div class="row" data-aos="fade-up">
        <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                <h3><a href="{{ route('customer_data_imunisasi') }}">Data Imunisasi</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                <h3><a href="{{ route('customer_data_ibu_hamil') }}">Data Kandungan</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                <h3><a href="{{ route('customer_data_timbangan') }}">Data Timbangan</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                <h3><a href="{{ route('profile_warga') }}">Profile Saya</a></h3>
            </div>
        </div>
    </div>
@endsection
