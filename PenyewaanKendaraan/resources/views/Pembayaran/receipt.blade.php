@extends('layout.main')

@section('title', 'Receipt')

@section('content')
<div class="container">
    <h1>Receipt</h1>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Nama Penyewa:</strong> {{ $order->nama }}</p>
    <p><strong>Jenis Kendaraan:</strong> {{ $order->jenis_kendaraan }}</p>
    <p><strong>Plat Kendaraan:</strong> {{ $order->plat }}</p>
    <p><strong>Status Pembayaran:</strong> {{ $order->pembayaran }}</p>
    <p><strong>Tanggal Masuk:</strong> {{ $order->tanggal_masuk }}</p>
    <p><strong>Tanggal Keluar:</strong> {{ $order->tanggal_keluar }}</p>
</div>
@endsection
