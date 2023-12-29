<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- my style -->
<link rel="stylesheet" href="{{ URL('cssfile/cssLogin.css') }}">


</head>
<body>
    <section class="login d-flex ">
        
        <div class="login-left ">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                        <h1>Selamat Datang</h1>
                        <p>Silahkan Registrasi</p>      
                    </div>                
                    <div class="login-form">
                        <form action="{{route('register-user')}}" method="post">
                            @if(Session::has("Fail"))
                            <div class="alert alert-danger">{{Session::get("Fail")}}</div>
                            @endif
                            @csrf
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Masukan Nama Anda</label>
                                <input type="text" class="form-control" id="Nama" name="name" aria-describedby="nama" placeholder="Masukan Nama" value="{{old('name')}}">
                                <span class="text-danger">@error("name") {{$message}} @enderror</span>

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukan Email" value="{{old('email')}}">
                                <span class="text-danger">@error("email") {{$message}} @enderror</span>

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                <span class="text-danger">@error("password") {{$message}} @enderror</span>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">User Login</button>
                            <span>Sudah Punya akun? <a href="/" class="text-decoration-none">LOG IN</a></span>
                        </form>
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
                    <div class="carousel-item">
                    <img class="d-block w-100 " src="img/IMG_4536.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 " src="img/" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </section>


    
</body>

</html>

