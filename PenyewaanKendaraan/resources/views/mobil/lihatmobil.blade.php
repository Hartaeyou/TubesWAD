<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <a class="navbar-brand" href="#">
            <img src="{{ URL('img/logo.png') }}" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            SeKa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("mobil") }}">Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Motor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jadwal</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
        <h1 style="margin-bottom : 30px; margin-top : 30px;">List Data Mobil</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Brand Mobil</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Plat Mobil</th>
                    <th scope="col">Mitra Mobil</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mobil as $m)
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    <td>{{$m->nama_mobil}}</td>
                    <td>{{$m->brand_mobil}}</td>
                    <td>{{$m->warna_mobil}}</td>
                    <td>{{$m->plat_mobil}}</td>
                    <td>{{$m->mitra_mobil}}</td>
                    <td><a href="detail" class="btn btn-primary">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>