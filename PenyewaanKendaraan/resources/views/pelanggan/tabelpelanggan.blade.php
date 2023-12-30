@extends ('layout.main')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <h1 style="margin-bottom : 30px; margin-top : 30px;">List Data Pelanggan</h1>
        <a class="btn btn-primary" href="tambahPelanggan">+ Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            @foreach ($data_customer as $pelanggan)
            <tbody>
                <tr>
                    <th scope="row">{{$pelanggan["id"]}}</th>
                    <td>{{$pelanggan["nama_customer"]}}</td>
                    <td>{{$pelanggan["nomor_telepon"]}}</td>
                    <td>{{$pelanggan["email_customer"]}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('detailPelanggan', $pelanggan->id) }}">Detail</a>
                        <a class="btn btn-danger">Hapus</a>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="d-flex justify-content-end">
            {{$data_customer->links()}}
        </div>
    </div>
</body>

@endsection