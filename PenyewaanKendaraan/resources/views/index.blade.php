@extends ('layout.main')

@section('title')
<title>Login</title>
@endsection

@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssLogin.css) }}">
@endsection

@section('content')
<section class="login d-flex ">
    <cdiv class="login-left ">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <div class="header">
                    <h1>Selamat Datang</h1>
                    <p>Selamat Datang dan Isi Username Dan Password</p>      
                </div>                
                <div class="login-form">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                            <div id="emailHelp" class="form-text">kami tidak akan menyebarkan email ini kesiapapun</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember" >Ingatakan Saya</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">User Login</button>
                    </form>
                        <span>Belum Punya akun? <a href="registrasi.php" class="text-decoration-none">Daftar Disini</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="login-right ">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100 " src="{{ URL('img/logo.png') }}" alt="First slide">
            </div>
        </div>
    </div>
</section>
@endsection