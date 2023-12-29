@extends ('layout.main')

@section('title')
<title>Pemesanan</title>
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/tablePemesanan.css) }}">
@endsection
@section('content')
<h1 class="d-flex justify-content-center">Table Pemesanan</h1>
<div class="d-flex justify-content-center align-items-center" style="min-height: 35vh;">    
    <div class="container">
        <a class="btn btn-primary" href="pemesanan">+Tambah</a>
        <br><br>
        <table  class="table table-bordered">
            <thead class="table-primary">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Keluar</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            @foreach ($pemesanans as $pemesanan)
            <tbody>
                <tr>
                <th scope="row">{{$pemesanan["id"]}}</th>
                <td>{{$pemesanan["nama"]}}</td>
                <td>{{$pemesanan["jenis_kendaraan"]}}</td>
                <td>{{$pemesanan["plat"]}}</td>
                <td>{{$pemesanan["pembayaran"]}}</td>
                <td>{{$pemesanan["tanggal_masuk"]}}</td>
                <td>{{$pemesanan["tanggal_keluar"]}}</td>
                <td>
                    <a class="btn btn-outline-info"href="{{ url('formUpdatePemesanan',$pemesanan->id) }}">Edit</a>
                    <a class="btn btn-outline-danger delete"href="#" data-id="{{$pemesanan->id}}">Hapus</a>
                    <a class="btn btn-outline-success"href="/pembayaran/{{$pemesanan->id}}"/>Bayar</a>
                </td>
            </tbody>
            @endforeach
        </table>
        <div class="d-flex justify-content-end">
            {{$pemesanans->links()}}
        </div>
    </div>
</div>
<script>
$('.delete').click(function(){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
            });
        } else {
            swal("Your imaginary file is safe!");
        }
    });
})
</script>
@endsection
