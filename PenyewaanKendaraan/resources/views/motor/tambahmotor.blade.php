@extends('layout.main')

<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('cssfile')
    <link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
    <style>
        #form {
            margin-top: 30px;
        }

        .form-control {
            width: 400px;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('content')
    <section id="form">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif

        <div class="container">
            <div class="d-flex flex-column align-items-center gap-5">
                <div style="width: 900px; text-align: center;">
                    <h1 style="font-wesight: bold; margin-top: 30px;">Tambah Data Motor</h1>
                </div>
                <div>
                    <form class="form-control" action="{{ route('motor') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="nameFormControlInput1">Nama Mobil</label>
                            <input class="form-control" id="nama" name="name" type="text" required placeholder="Masukkan Nama Motor">
                        </div>
                        <div class="form-group">
                            <label for="brandFormControlInput1">Brand Motor</label>
                            <input class="form-control" id="brand" name="brand" type="text" required placeholder="Masukkan Merk Motor">
                        </div>
                        <div class="form-group">
                            <label for="colourFormControlInput1">Warna Motor</label>
                            <input class="form-control" id="warna" name="warna" type="text" required placeholder="Masukkan Warna Motor">
                        </div>
                        <div class="form-group">
                            <label for="platFormControlInput1">Plat Motor</label>
                            <input class="form-control" id="plat" name="plat" type="text" required placeholder="Masukkan Plat Motor">
                        </div>
                            <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
                      </form>
                    </div>
        </div>
    </section>
@endsection
