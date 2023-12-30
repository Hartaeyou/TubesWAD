@extends ('layout.main')

@section('title')
<title>Perbaruan Data</title>
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('cssfile')
<link rel="stylesheet" href="{ URL('cssFile/cssTampilan.css) }}">
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
                    <a href= "{{ url('delete-mobil', $m->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


@endsection