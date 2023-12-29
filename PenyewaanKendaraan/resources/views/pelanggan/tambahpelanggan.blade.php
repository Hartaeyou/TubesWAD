@extends ('layout.main')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<h1 style="text-align : center;">Tambah Data Pelanggan</h1>
    <div class="container" style="margin-top : 20px;">
        <div class="d-grid gap-2 col-4 mx-auto">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tambahmobil-baru') }}" method="POST">
                        @csrf
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <span class="text-danger">@error("nama") {{$message}} @enderror</span>
                        </div>
                        
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="brand" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="brand" name="nomorHandphone">
                            <span class="text-danger">@error("nomorHandphone") {{$message}} @enderror</span>
                        </div>
                       
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="warna" class="form-label">Email</label>
                            <input type="text" class="form-control" id="warna" name="email">
                            <span class="text-danger">@error("email") {{$message}} @enderror</span>
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto mt-4">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@if(Session::has("success"))
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    swal("Selamat", "{!! Session::get('success') !!}", "success", {
        button: "OK",
    });
</script>
@endif

@endsection