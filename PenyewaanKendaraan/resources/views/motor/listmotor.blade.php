@extends('layout.main')

@section('content')
    <div class="container">
        <h1 style="font-weight: bold; margin-top: 30px; margin-bottom: 30px">List Data Motor</h1>
        <div class="d-flex justify-content-center">
            <table class="table">
                <thead class>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Motor</th>
                        <th scope="col">Brand Motor</th>
                        <th scope="col">Warna Motor</th>
                        <th scope="col">Plat Motor</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($motors as $key => $motor)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $motor->nama_motor }}</td>
                            <td>{{ $motor->brand_motor }}</td>
                            <td>{{ $motor->warna_motor }}</td>
                            <td>{{ $motor->plat_motor }}</td>
                            <td>
                                <a href="{{ route('detailmotor', $motor->id) }}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
