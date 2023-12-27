<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pemesanan.tampilanPemesanan");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formSubmit(Request $request)
    {
        $validatedData = $request->validate([
            "nama"=>"required",
            "jenisKendaraan"=>"required",
            "plat" => "required",
            "pembayaran" => "required",
            "tanggalKeluar" => "required",
            "tanggalMasuk" => "required",
        ]);

        Pemesanan::create([
            'nama' => $validatedData['nama'],
            'jenis_kendaraan' => $validatedData['jenisKendaraan'],
            'plat' => $validatedData['plat'],
            'pembayaran' => $validatedData['pembayaran'],
            'tanggal_masuk' => $validatedData['tanggalMasuk'],
            'tanggal_keluar' => $validatedData['tanggalKeluar'],
        ]);

        return back()->with('success', 'Pemesanan berhasil!');
        
    }
    public function showTable(){
        $data= Pemesanan::all();
        return view('pemesanan.tablePemesanan',['pemesanans'=>$data]);
    }

  
}
