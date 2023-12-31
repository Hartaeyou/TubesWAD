@extends('layout.main')

@section('title')
  <title>Motor</title>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section id="home">
        <div class="container">
            <div class="d-flex flex-column align-items-center gap-5">
                <div style="width: 900px; text-align: center;">
                    <h1 style="font-weight: bold; margin-top: 50px;">Motor</h1>
                </div>
                <div class="d-flex flex-column justify-content-between">
                    <img src='{{ URL('img/logo.png') }}' class='card-img-top' alt='logo'>
                </div>
                <div class="d-flex flex-row gap-3 mt-5">
                    <a href="tambahmotor" class="btn btn-dark" role="button" aria-pressed="true" style="width: 200px;">Tambah</a>
                    <a href="listmotor" class="btn btn-dark" role="button" aria-pressed="true" style="width: 200px;">Lihat</a>
                </div>
            </div>
        </div>
    </section>


@endsection