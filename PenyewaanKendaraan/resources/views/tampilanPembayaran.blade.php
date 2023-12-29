<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
        <img src="{{ URL('img/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            SeKa
        </a>
        <div class="container justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                <ul class="navbar-nav text-center" >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Motor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jadwal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>