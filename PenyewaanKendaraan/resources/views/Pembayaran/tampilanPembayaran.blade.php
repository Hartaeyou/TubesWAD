@extends('layout.main')

@section('title', 'Tempat Pembayaran')

@section('content')
<div class="container">
    <h1>Tempat Pembayaran</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penyewa</th>
                <th>Jenis Kendaraan</th>
                <th>Plat Kendaraan</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanans as $pemesanan)
            <tr>
                <td>{{ $pemesanan->id }}</td>
                <td>{{ $pemesanan->nama }}</td>
                <td>{{ $pemesanan->jenis_kendaraan }}</td>
                <td>{{ $pemesanan->plat }}</td>
                <td>{{ $pemesanan->pembayaran }}</td>
                <td>
                    @if($pemesanan->pembayaran == 'DP')
                        <a href="{{ route('lunaskan', $pemesanan->id) }}" class="btn btn-primary">Lunaskan</a>
                    @else
                        <a href="{{ route('processPayment', $pemesanan->id) }}" class="btn btn-success">Process Payment</a>
                    @endif
                        <a href="{{ route('deleteOrder', $pemesanan->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection