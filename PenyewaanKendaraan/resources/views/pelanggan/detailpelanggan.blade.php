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
<h1 style="text-align : center;">Detail Pelanggan</h1>
    <div class="container" style="margin-top : 20px;">
        <div class="d-grid gap-2 col-4 mx-auto">

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" disabled>
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="brand" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="brand" name="nomorHandphone" disabled>
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" disabled>
                        </div>

                        <div class="d-grid gap-2 col-10 mx-auto mt-4">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto mt-3">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection