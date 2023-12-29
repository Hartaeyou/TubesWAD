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
<div class="grid text-center">
        <div>
            <h1 style="font-weight: bold; margin-top : 30px">Pelanggan</h1>
        </div>
        <div>
        <img src="{{ URL('img/logo.png') }}" alt="Logo" width="575" height="530" class="d-inline-block align-text-top">
        </div>
        <div><p> </p></div>
        <div class="d-grid gap-2 col-3 mx-auto">
        <button type="button" class="btn btn-dark">Lihat</button>
        <button type="submit" class="btn btn-dark">Tambah</button>
        </div>
    </div>
</body>
@endsection