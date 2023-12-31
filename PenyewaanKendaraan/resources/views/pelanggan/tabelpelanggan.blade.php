@extends ('layout.main')

@section('title')
<title>List Data Pelanggan</title>
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/tablePemesanan.css) }}">
@endsection

@section('content')

    <div class="container">
        <h1 style="margin-bottom : 30px; margin-top : 30px;">List Data Pelanggan</h1>
        <a class="btn btn-primary" href="tambahPelanggan">+ Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_customer as $pelanggan)
                <tr>
                    <th scope="row">{{$pelanggan->id}}</th>
                    <td>{{$pelanggan->nama_customer}}</td>
                    <td>{{$pelanggan->nomor_telepon}}</td>
                    <td>{{$pelanggan->email_customer}}</td>
                    <td><a href="{{ url('detailPelanggan', $pelanggan->id) }}" class="btn btn-primary">Ubah</a>
                    <a href= "#" class="btn btn-danger delete" data-id="{{$pelanggan->id}}" data-nama="{{$pelanggan->nama_customer}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
$('.delete').click(function(){
    var nama_customer = $(this).attr('data-nama');
    var idCustomer = $(this).attr('data-id');
    swal({
        title: "Apakah Anda Yakin?",
        text: "Anda akan menghapus data pelanggan " +nama_customer+" dengan ID "+idCustomer+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location="/hapusData/"+idCustomer+""
            swal("Data Berhasil Dihapus", {
                icon: "success",
            });
        } else {
            swal("Data Tidak Jadi Dihapus");
        }
    });
})
</script>

@if(Session::has("success"))
<script>
    swal("Berhasil", "{!! Session::get('success') !!}", "success", {
        button: "OK",
    });
@endif
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


@endsection