@extends ('layout.main')

@section('title')
<title>Tambah Mitra</title>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
@endsection

@section('content')
<h1 class="d-flex justify-content-center">Tambah Mitra</h1>
<div class="d-flex justify-content-center align-items-center" style="min-height: 35vh;">  

<div class="container">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <form method="post" action="/mitra">
                @csrf
                <div class="mb-3">
                    <label for="nama_mitra" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" id="nama_mitra" name="nama_mitra">
                    <span class="text-danger">@error("nama_mitra") {{$message}} @enderror</span>
                </div>

                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                    <span class="text-danger">@error("nomor_telepon") {{$message}} @enderror</span>
                </div>
                
                <div class="mb-3">
                    <label for="alamat_mitra" class="form-label">Alamat Mitra</label>
                    <input type="text" class="form-control" id="alamat_mitra" name="alamat_mitra">
                    <span class="text-danger">@error("alamat_mitra") {{$message}} @enderror</span>
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