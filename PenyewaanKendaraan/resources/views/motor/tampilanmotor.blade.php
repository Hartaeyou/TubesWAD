@extends('layout.main')

@section('title')
  <title>Motor</title>
@endsection

@section('content')
    <section id="home">
        <div class="container">
            <div class="d-flex flex-column align-items-center gap-5">
                <div style="width: 900px; text-align: center;">
                    <h1 style="font-weight: bold; margin-top: 30px;">Motor</h1>
                </div>
                <div class="d-flex flex-column justify-content-between mt-2">
                    <img src='{{ URL('img/logo.png') }}' class='card-img-top' alt='logo'>
                </div>
                <div class="d-flex flex-row gap-3 mt-3">
                    <a href="tambahmotor" class="btn btn-dark" role="button" aria-pressed="true" style="width: 200px;">Tambah</a>
                    <a href="#" class="btn btn-dark" role="button" aria-pressed="true" style="width: 200px;">Lihat</a>
                </div>
            </div>
        </div>
    </section>
@endsection
