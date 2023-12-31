@extends('layout.main')

@section('cssfile')
    <link rel="stylesheet" href="{{ URL('cssFile/cssTampilan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <style>
        .card {
            display: flex;
            flex-direction: column;
            width: 800px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fff;
        }

        .form-container {
            flex: 1;
            padding-right: 20px;
        }

        .card-img-top {
            max-width: 100%;
            height: auto;
            max-width: 300px;
            border-radius: 10px;
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
        <div class="card" style="justify-content: center; align-items: center;">
            <div class="form-container">
                <div style="text-align: center;">
                    <h2 style="font-weight: bold; margin-top: 20px; margin-bottom: 30px">Tambah Data Motor</h2>
                </div>
                <table>
                    <th>
                        <form action="{{ route('tambahmotor') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputNama">Nama Motor</label>
                                <input class="form-control" id="inputNama" name="nama" type="text" required placeholder="Masukkan Nama Motor">
                            </div>
                            <div class="form-group">
                                <label for="inputBrand">Brand Motor</label>
                                <input class="form-control" id="inputBrand" name="brand" type="text" required placeholder="Masukkan Merk Motor">
                            </div>
                            <div class="form-group">
                                <label for="inputWarna">Warna Motor</label>
                                <input class="form-control" id="inputWarna" name="warna" type="text" required placeholder="Masukkan Warna Motor">
                            </div>
                            <div class="form-group">
                                <label for="inputPlat">Plat Motor</label>
                                <input class="form-control" id="inputPlat" name="plat" type="text" required placeholder="Masukkan Plat Motor">
                            </div>
                            <div class="btn-container">
                                <button class="btn btn-success" type="submit">Tambah</button>
                                <a href="{{ route('motor') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </th>
                    <th>
                        <div class="d-flex flex-column justify-content-between">
                            <img src="{{ URL('img/logo.png') }}" class="card-img-top" alt="logo">
                        </div>
                    </th>
                </table>
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