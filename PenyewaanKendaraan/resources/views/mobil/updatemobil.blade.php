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
                    <form action="{{ url('updatedmobil', $mobil->id) }}" method="get">
                        @csrf
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nama" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama" name="nama_mobil" value="{{ $mobil->nama_mobil }}">
                        </div>
                        @error('nama_mobil')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="brand" class="form-label">Brand Mobil</label>
                            <input type="text" class="form-control" id="brand" name="brand_mobil" value="{{ $mobil->brand_mobil }}">
                        </div>
                        @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="warna" class="form-label">Warna Mobil</label>
                            <input type="text" class="form-control" id="warna" name="warna_mobil" value="{{ $mobil->warna_mobil }}">
                        </div>
                        @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="plat" class="form-label">Plat Mobil</label>
                            <input type="text" class="form-control" id="plat" name="plat_mobil" value="{{ $mobil->plat_mobil }}">
                        </div>

                        @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="plat" class="form-label">Mitra Mobil</label>
                            <input type="text" class="form-control" id="plat" name="mitra_mobil" value="{{ $mobil->mitra_mobil }}">
                        </div>

                        @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                        <div class="d-grid gap-2 col-10 mx-auto mt-4">
                            <button type="submit" class="btn btn-primary">Update</button>
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