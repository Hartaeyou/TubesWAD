@extends ('layout.main')

@section('title')
<title>Perbaruan Data</title>
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
@endsection

@section('content')
<br>
<div class="container">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">Form Pembaruan Pemesanan</h1><br>
                <form action="{{url('updatedData', $updateForm->id)}}" method="get">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" value="{{ $updateForm->nama }}" disabled>
                    <span class="text-danger">@error("nama") {{$message}} @enderror</span>
                </div>
                <div class="mb-3"> 
                    <label for="jenisKendaraan" class="form-label">Pilih Jenis Kendaraan</label>                 
                    <select class="form-select" aria-label="Default select example" name="jenis_kendaraan" >
                        <option selected>{{ $updateForm->jenis_kendaraan }}</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                    </select>
                    <span class="text-danger">@error("jenisKendaraan") {{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="plat" class="form-label">Plat Kendaraan</label>
                    <input type="text" class="form-control" id="plat" name="plat" value="{{ $updateForm->plat }}">
                    <span class="text-danger">@error("plat") {{$message}} @enderror</span>
                </div>
                <div class="mb-3"> 
                    <label for="pembayaran" class="form-label">Pembayaran</label>                 
                    <select class="form-select" aria-label="Default select example" name="pembayaran" disabled>
                        <option selected>{{ $updateForm->pembayaran }}</option>
                        <option value="DP">DP</option>
                        <option value="Lunas">Lunas</option>
                        <span class="text-danger">@error("pembayaran") {{$message}} @enderror</span>

                    </select>
                </div>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="tanggalMasuk" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggalMasuk" value="{{ $updateForm->tanggal_masuk }}">
                    </div>
                    <span class="text-danger">@error("tanggalMasuk") {{$message}} @enderror</span>
                    <div class="col">
                        <label for="tanggalKeluar" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggalKeluar" value="{{ $updateForm->tanggal_keluar }}">
                    </div>
                    <span class="text-danger">@error("tanggalKeluar") {{$message}} @enderror</span>

                </div>
                <div class="d-flex">
                    <div class="p-2 flex-grow-1">                        
                        <button type="submit" class="btn btn-success perbarui">Perbarui</button>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-danger" href="{{ route('tablePemesanan')}}">kembali</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection