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

    <div class="grid text-center">
        <div>
            <h1 style="font-weight: bold; margin-top : 30px">Mobil</h1>
        </div>
        <div>
        <img src="{{ URL('img/logo.png') }}" alt="Logo" width="575" height="530" class="d-inline-block align-text-top">
        </div>
        <div><p> </p></div>
        <div class="d-grid gap-2 col-3 mx-auto">
        <button type="button" class="btn btn-dark" onclick="window.location='{{ route("lihatmobil") }}'">Lihat</button>
        <button type="submit" class="btn btn-dark" onclick="window.location='{{ route("tambahmobil") }}'">Tambah</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
@endsection