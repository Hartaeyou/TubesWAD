@extends ('layout.main')

@section('title')
<title>Pemesanan</title>
@endsection

@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
@endsection

@section('content')
<br>
<div class="container">
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

</div>
@endsection