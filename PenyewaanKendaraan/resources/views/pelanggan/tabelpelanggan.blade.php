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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_customer as $c)
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    <td>{{$m->nama_customer}}</td>
                    <td>{{$m->nomor_telepon}}</td>
                    <td>{{$m->email_customer}}</td>
                    <td><a href="detail" class="btn btn-primary">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$data_customer->links()}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

@endsection