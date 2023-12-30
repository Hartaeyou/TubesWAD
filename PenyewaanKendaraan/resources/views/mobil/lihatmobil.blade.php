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

    <div class="container">
        <h1 style="margin-bottom : 30px; margin-top : 30px;">List Data Mobil</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Brand Mobil</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Plat Mobil</th>
                    <th scope="col">Mitra Mobil</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mobil as $m)
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    <td>{{$m->nama_mobil}}</td>
                    <td>{{$m->brand_mobil}}</td>
                    <td>{{$m->warna_mobil}}</td>
                    <td>{{$m->plat_mobil}}</td>
                    <td>{{$m->mitra_mobil}}</td>
                    <td><a href="{{ url('updatemobil', $m->id) }}" class="btn btn-primary">Update</a>
                    <a href= "#" class="btn btn-danger delete" data-id="{{$m->id}}" data-nama="{{$m->nama_mobil}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
$('.delete').click(function(){
    var nama_mobil = $(this).attr('data-nama');
    var idMobil = $(this).attr('data-id');
    swal({
        title: "Apakah Anda Yakin?",
        text: "Anda akan menghapus data mobil " +nama_mobil+" dengan ID "+idMobil+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location="/delete-mobil/"+idMobil+""
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