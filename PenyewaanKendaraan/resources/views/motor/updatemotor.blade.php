@extends('layout.main')

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

@endsection
