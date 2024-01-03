<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PembayaranController extends Controller
{
    public function index() {
        $pemesanans = Pemesanan::all();

        return view('pembayaran.tampilanPembayaran', compact('pemesanans'));
    }

    public function lunaskan($id) {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update(['pembayaran' => 'Lunas']);

        return redirect()->route('tempatPembayaran');
    }

    public function processPayment($id) {
        $order = Pemesanan::findOrFail($id);

        if ($order->pembayaran !== 'Lunas') {
            return back()->with('error', 'The order is not marked as paid.');
        }
    
        return view('pembayaran.receipt', compact('order'));
    }
}
