<!DOCTYPE html>
<html>

<head>
    <title>Cetak - Data Ibu Hamil Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 15px ">
                <h2>Cetak Data Ibu Hamil</h2>
                {{-- <div class="pull-left">
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('cetak_ibu_hamil') }}">Download
                        PDF</a>
                </div> --}}
            </div>
        </div><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Imunisasi</th>
                    <th scope="col">Tanggal Imunisasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ibuHamil as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->kehamilan_ke }}</td>
                        <td>{{ $data->umur_kehamilan }}</td>
                        <td>{{ $data->golongan_darah }}</td>
                        <td>{{ $data->tinggi_badan }}</td>
                        <td>{{ $data->berat_badan }}</td>
                        <td>{{ $data->tanggal_periksa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
