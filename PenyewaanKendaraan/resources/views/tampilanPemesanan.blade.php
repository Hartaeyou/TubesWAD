<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
</head>
<link rel="stylesheet" href="{{ URL('cssfile/cssTampilan.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
        <img src="{{ URL('img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            SeKa
        </a>
        <div class="container justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                <ul class="navbar-nav text-center" >
                    <li class="nav-item">
                        <a class="nav-link "  href="#">Mitra</a>
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
                        <a class="nav-link active" aria-current="page" href="#">Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">Form Pemesanan SeKa</h1><br>
                <form action="">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">
                </div>
                <div class="mb-3"> 
                    <label for="jenisKendaraan" class="form-label">Pilih Jenis Kendaraan</label>                 
                    <select class="form-select" aria-label="Default select example" name="jenisKendaraan">
                        <option selected>Jenis Kendaraan</option>
                        <option value="DP">Mobil</option>
                        <option value="Lunas">Motor</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="plat" class="form-label">Plat Kendaraan</label>
                    <input type="text" class="form-control" id="plat">
                </div>
                <div class="mb-3"> 
                    <label for="pembayaran" class="form-label">Pembayaran</label>                 
                    <select class="form-select" aria-label="Default select example" name="pembayaran">
                        <option selected>Pilih Pembayaran</option>
                        <option value="DP">DP</option>
                        <option value="Lunas">Lunas</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="tanggalMasuk" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" placeholder="Tanggal Peminjaman" aria-label="Tanggal Masuk">
                    </div>
                    <div class="col">
                        <label for="tanggalKeluar" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" >
                    </div>
                </div>
        
                    <button type="submit" class="btn btn-success">Pesan!</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>