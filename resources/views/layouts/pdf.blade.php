<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Download - @yield('header')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
</head>

<body>
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <h2>@yield('header') - Posyandu Dahlia 1</h2>
            <p>{{ date('d-m-Y') }}</p>
        </div>
        <br>
        @yield('content')
    </div>
</body>

</html>
