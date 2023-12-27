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
                    <a class="nav-link" href="#">Mobil</a>
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

    <h1 style="text-align : center;">Tambah Data Mobil</h1>
    <div class="container" style="margin-top : 20px;">
        <div class="d-grid gap-2 col-4 mx-auto">
    
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <label for="nama" class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <label for="brand" class="form-label">Brand Mobil</label>
                        <input type="text" class="form-control" id="brand">
                    </div>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <label for="warna" class="form-label">Warna Mobil</label>
                        <input type="text" class="form-control" id="warna">
                    </div>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <label for="plat" class="form-label">Plat Mobil</label>
                        <input type="text" class="form-control" id="plat">
                    </div>
                    <div class="d-grid gap-2 col-10 mx-auto mt-4">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>