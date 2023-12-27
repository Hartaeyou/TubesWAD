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
                <form action="{{route('formSubmit')}}" method="post">
                    @if(Session::has("success"))
                    <div class="alert alert-success">{{Session::get("success")}}</div>
                    @endif
                    @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                    <span class="text-danger">@error("nama") {{$message}} @enderror</span>
                </div>
                <div class="mb-3"> 
                    <label for="jenisKendaraan" class="form-label">Pilih Jenis Kendaraan</label>                 
                    <select class="form-select" aria-label="Default select example" name="jenisKendaraan">
                        <option selected>Jenis Kendaraan</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                    </select>
                    <span class="text-danger">@error("jenisKendaraan") {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="plat" class="form-label">Plat Kendaraan</label>
                    <input type="text" class="form-control" id="plat" name="plat">
                    <span class="text-danger">@error("plat") {{$message}} @enderror</span>
                </div>
                <div class="mb-3"> 
                    <label for="pembayaran" class="form-label">Pembayaran</label>                 
                    <select class="form-select" aria-label="Default select example" name="pembayaran">
                        <option selected>Pilih Pembayaran</option>
                        <option value="DP">DP</option>
                        <option value="Lunas">Lunas</option>
                        <span class="text-danger">@error("pembayaran") {{$message}} @enderror</span>

                    </select>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="tanggalMasuk" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggalMasuk">
                    </div>
                    <span class="text-danger">@error("tanggalMasuk") {{$message}} @enderror</span>
                    <div class="col">
                        <label for="tanggalKeluar" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggalKeluar" >
                    </div>
                    <span class="text-danger">@error("tanggalKeluar") {{$message}} @enderror</span>

                </div>
                <div class="d-flex">
                    <div class="p-2 flex-grow-1">                        
                        <button type="submit" class="btn btn-success">Pesan!</button>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-danger"href="tablePemesanan">kembali</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection