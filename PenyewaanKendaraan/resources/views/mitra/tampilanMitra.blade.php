@extends ('layout.main')

@section('title')
<title>Pemesanan</title>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
@endsection

<h1 class="d-flex justify-content-center">Table Mitra</h1>
<div class="d-flex justify-content-center align-items-center" style="min-height: 35vh;">    
    <div class="container">
        <a class="btn btn-primary" href="#">+Tambah</a>
        <br><br>
        <table  class="table table-bordered">
            <thead class="table-primary">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Alamat Mitra</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            @foreach ($data_mitra as $mitra)
            <tbody>
                <tr>
                <th scope="row">{{$mitra["id"]}}</th>
                <td>{{$mitra["nama_mitra"]}}</td>
                <td>{{$mitra["nomor_telepon"]}}</td>
                <td>{{$mitra["alamat_mitra"]}}</td>
                <td>
                    <a class="btn btn-outline-info"href="#">Edit</a>
                    <a class="btn btn-outline-danger"href="">Hapus</a>
                </td>
            </tbody>
            @endforeach
        </table>
        <div class="d-flex justify-content-end">
            {{$data_mitra->links()}}
        </div>
    </div>
</div>

@endsection
