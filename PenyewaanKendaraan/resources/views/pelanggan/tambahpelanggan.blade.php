@extends ('layout.main')

@section('title')
<title>Tambah Pelanggan</title>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
@endsection

@section('content')
<body>
<h1 style="text-align : center;">Tambah Data Pelanggan</h1>
    <div class="container" style="margin-top : 20px;">
        <div class="d-grid gap-2 col-4 mx-auto">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tambahPelangganBaru') }}" method="get">
                        @csrf
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama_customer">
                            <span class="text-danger">@error("nama") {{$message}} @enderror</span>
                        </div>
                        
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nomor" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="nomor" name="nomor_telepon">
                            <span class="text-danger">@error("nomorHandphone") {{$message}} @enderror</span>
                        </div>
                       
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email_customer">
                            <span class="text-danger">@error("email") {{$message}} @enderror</span>
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto mt-4">
                            <button type="submit" class="btn btn-primary" onClick="formTambah()">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


@endsection