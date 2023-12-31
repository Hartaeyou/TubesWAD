{{-- @extends('layout.main')

@section('cssfile')
    <link rel="stylesheet" href="{{ URL('cssFile/cssTampilan.css') }}">
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
                    <h1 style="font-weight: bold; margin-top: 30px;">Update Data Motor</h1>
                </div>
                <div>
                    <form class="form-control" action="{{ route('updateMotor', $motor->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputNama">Nama Motor</label>
                            <div class="col-sm-10 mt-2">
                                <input class="form-control" id="inputNama" name="nama" type="text" required
                                    placeholder="Masukkan Nama Motor" value="{{ old('nama', $motor->nama_motor) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputBrand">Brand Motor</label>
                            <div class="col-sm-10 mt-2">
                                <input class="form-control" id="inputBrand" name="brand" type="text" required
                                    placeholder="Masukkan Merk Motor" value="{{ old('brand', $motor->brand_motor) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWarna">Warna Motor</label>
                            <div class="col-sm-10 mt-2">
                                <input class="form-control" id="inputWarna" name="warna" type="text" required
                                    placeholder="Masukkan Warna Motor" value="{{ old('warna', $motor->warna_motor) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPlat">Plat Motor</label>
                            <div class="col-sm-10 mt-2">
                                <input class="form-control" id="inputPlat" name="plat" type="text" required
                                    placeholder="Masukkan Plat Motor" value="{{ old('plat', $motor->plat_motor) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-success" type="submit" style="margin-top: 20px;">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection --}}

@extends('layout.main')

@section('cssfile')
    <link rel="stylesheet" href="{{ URL('cssFile/cssTampilan.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 30px;
        }

        .card {
            width: 400px;
            margin: auto;
            margin-top: 20px;
        }

        .card-header {
            background-color: #d1d1d1;
            color: #000000;
        }

        .card-body {
            background-color: #eeeeee;
        }

        .form-group label {
            text-align: left;
            margin-bottom: 0;
        }

        .form-group input {
            margin-top: 0;
        }

        .btn-back {
            margin-top: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-container button,
        .btn-container a {
            width: 48%;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center font-weight-bold" style="font-weight: bold; margin-top: 20px; margin-bottom: 30px">Update Data Motor</h2>
        <div class="card">
            <div class="card-header">
                <b>Motor Information</b>
            </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ route('updateMotor', $motor->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputNama">Nama Motor</label>
                            <input class="form-control" id="inputNama" name="nama" type="text" required
                                placeholder="Masukkan Nama Motor" value="{{ old('nama', $motor->nama_motor) }}">
                            <div class="invalid-feedback">
                                Please provide a valid name.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBrand">Brand Motor</label>
                            <input class="form-control" id="inputBrand" name="brand" type="text" required
                                placeholder="Masukkan Merk Motor" value="{{ old('brand', $motor->brand_motor) }}">
                            <div class="invalid-feedback">
                                Please provide a valid brand.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputWarna">Warna Motor</label>
                            <input class="form-control" id="inputWarna" name="warna" type="text" required
                                placeholder="Masukkan Warna Motor" value="{{ old('warna', $motor->warna_motor) }}">
                            <div class="invalid-feedback">
                                Please provide a valid color.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPlat">Plat Motor</label>
                            <input class="form-control" id="inputPlat" name="plat" type="text" required
                                placeholder="Masukkan Plat Motor" value="{{ old('plat', $motor->plat_motor) }}">
                            <div class="invalid-feedback">
                                Please provide a valid plate number.
                            </div>
                        </div>
                        <div class="btn-container">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="{{ route('motor') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            <div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
