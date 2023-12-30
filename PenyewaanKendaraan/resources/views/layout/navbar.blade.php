<!-- Nav -->
<nav class="navbar nav-underline navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/dashboard">
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
                    <a class="nav-link "  href="#">Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("mobil") }}">Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Motor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/tablePemesanan">Pemesanan</a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="btn btn-danger btn-sm" aria-current="page" href="logout">Log Out</a>
        </li>
    </ul>
</nav>

<!-- Nav End -->