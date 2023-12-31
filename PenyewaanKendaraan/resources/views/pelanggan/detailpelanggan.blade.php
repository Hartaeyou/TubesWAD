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

<h1 style="text-align : center;">Edit Data Mobil</h1>
    <div class="container" style="margin-top : 20px;">
        <div class="d-grid gap-2 col-4 mx-auto">

            <div class="card">
                <div class="card-body">
                    <form action="{{ url('ubahData', $pelanggan->id) }}" method="get">
                        @csrf
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nama" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama" name="nama_customer" value="{{ $pelanggan->nama_customer }}" disabled>
                        </div>
                       
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="brand" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="nomor" name="nomor_telepon" value="{{ $pelanggan->nomor_telepon }}">
                        </div>
                       
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="warna" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email_customer" value="{{ $pelanggan->email_customer }}">
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto mt-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto mt-3">
                            <a class="btn btn-danger" href="{{ route('tabelPelanggan') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
@endsection