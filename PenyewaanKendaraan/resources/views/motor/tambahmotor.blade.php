@extends('layout.main')

@section('cssfile')
    <link rel="stylesheet" href="{{ URL('cssFile/cssTampilan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
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
        <h2 class="text-center font-weight-bold" style="font-weight: bold; margin-top: 20px; margin-bottom: 50px">Tambah Data Motor</h2>
        <div class="card" >
            <div class="card-header">
                <b>Motor Information</b>
            </div>
            <div class="card-body">
                <form action="{{ route('tambahmotor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputNama">Nama Motor:</label>
                        <input class="form-control" id="inputNama" name="nama" type="text" required placeholder="Masukkan Nama Motor">
                    </div>
                    <div class="form-group">
                        <label for="inputBrand">Brand Motor:</label>
                        <input class="form-control" id="inputBrand" name="brand" type="text" required placeholder="Masukkan Merk Motor">
                    </div>
                    <div class="form-group">
                        <label for="inputWarna">Warna Motor:</label>
                        <input class="form-control" id="inputWarna" name="warna" type="text" required placeholder="Masukkan Warna Motor">
                    </div>
                    <div class="form-group">
                        <label for="inputPlat">Plat Motor:</label>
                        <input class="form-control" id="inputPlat" name="plat" type="text" required placeholder="Masukkan Plat Motor">
                    </div>
                    <div class="btn-container">
                        <button class="btn btn-success" type="submit">Tambah</button>
                        <a href="{{ route('motor') }}" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection