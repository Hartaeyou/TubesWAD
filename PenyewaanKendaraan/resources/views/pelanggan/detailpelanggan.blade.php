@extends ('layout.main')

<head>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
@endsection
</head>

@section('content')


<body>
<h1 style="text-align : center;">Edit Data Pelanggan</h1>
    <div class= "container" style="margin-top : 20px;">
        <div class="d-grid gap-2 col-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('ubah', $ubahForm->id) }}" method= "get">
                        @csrf
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama_customer"  value="{{ $ubahForm->nama_customer }}" disabled>
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="brand" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="brand" name="nomor_telepon" value="{{ $ubahForm->nomor_telepon }}">
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email_customer" value="{{ $ubahForm->email_customer }}">
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto mt-4">
                            <buton type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto mt-3">
                            <a class="btn btn-danger" href="{{ url('tabelPelanggan') }}">Kembali</a>
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

@endsection