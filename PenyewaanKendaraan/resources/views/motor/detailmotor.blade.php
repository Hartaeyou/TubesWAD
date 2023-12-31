@extends('layout.main')

@section('title')
    <title>Detail Motor</title>
@endsection

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
            background-color: #daecff;
            color: #000000;
        }

        .card-body {
            background-color: #f8f9fa;
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
    </style>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center font-weight-bold" style="font-weight: bold; margin-top: 20px; margin-bottom: 30px">Detail Motor</h2>
        <div class="card">
            <div class="card-header">
                <b>Motor Information</b>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputNama">Nama Motor:</label>
                    <input class="form-control" id="inputNama" name="nama" type="text" value="{{ $motor->nama_motor }}" readonly>
                </div>
                <div class="form-group">
                    <label for="inputBrand">Brand Motor:</label>
                    <input class="form-control" id="inputBrand" name="brand" type="text" value="{{ $motor->brand_motor }}" readonly>
                </div>
                <div class="form-group">
                    <label for="inputWarna">Warna Motor:</label>
                    <input class="form-control" id="inputWarna" name="warna" type="text" value="{{ $motor->warna_motor }}" readonly>
                </div>
                <div class="form-group">
                    <label for="inputPlat">Plat Motor:</label>
                    <input class="form-control" id="inputPlat" name="plat" type="text" value="{{ $motor->plat_motor }}" readonly>
                </div>
                <div class="form-group">
                    <label for="createAt">Created At:</label>
                    <input class="form-control" id="createAt" name="createAt" type="text" value="{{ $motor->created_at }}" readonly>
                </div>
                <div class="form-group">
                    <label for="updatedAt">Updated At:</label>
                    <input class="form-control" id="updatedAt" name="updatedAt" type="text" value="{{ $motor->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection