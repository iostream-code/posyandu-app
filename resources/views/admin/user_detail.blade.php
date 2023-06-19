@extends('layouts.admin')

@section('content')
    <section class="section-dashboard">
        <div class="row">
            <h5>Ini halaman detail User</h5>
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
            <p>{{ $user->is_admin }}</p>
        </div>
    </section>
@endsection
