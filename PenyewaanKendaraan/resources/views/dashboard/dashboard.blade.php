@extends ('layout.main')

@section('title')
<title>Dashboard</title>
@endsection


@section('content')
<div class="grid text-center">
        <div>
            <h1 style="font-weight: bold; margin-top : 30px">Dashboard Seka</h1>
        </div>
        <div>
        <img src="{{ URL('img/logo.png') }}" alt="Logo" width="575" height="530" class="d-inline-block align-text-top">
        </div>
            <br>
        <div class=" gap-5 d-flex justify-content-center">
        <a class="btn btn-dark btn-lg" href="/tablePemesanan">Pemesanan</a>
        <a class="btn btn-dark btn-lg" href="">Tambah Motor</a>
        <a class="btn btn-dark btn-lg" href="/mobil">Tambah Mobil</a>
        <a class="btn btn-dark btn-lg" href="">Tambah Pelanggan</a>
        <a class="btn btn-dark btn-lg" href="">Tambah Mitra</a>
        <a class="btn btn-dark btn-lg" href="">Pembayaran</a>
        </div>
    </div>
@endsection