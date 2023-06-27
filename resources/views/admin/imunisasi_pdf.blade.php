<!DOCTYPE html>
<html>

<head>
    <title>Cetak - Data Imunisasi Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 15px ">
                <div class="pull-left">
                    <h2>Data Imunisasi</h2>
                </div>
                {{-- <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('cetak_imunisasi') }}">Download
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
                @foreach ($imunisasi as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}</td>
                        <td>{{ $data->jenis_imunisasi }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->tanggal_imunisasi)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
