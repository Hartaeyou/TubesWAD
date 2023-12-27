<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class mobilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("mobil/tampilanmobil");
    }

    public function indexlihat()
    {
        //
        return view("mobil/lihatmobil");
    }
    public function indextambah()
    {
        //
        return view("mobil/tambahmobil");
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        {
            $request->validate([
                "nama_mobil" => "required",
                "brand_mobil" => "required",
                "warna_mobil" => "required",
                "plat_mobil" => "required",
                "mitra_mobil" => "required"
            ]);
            $mobil=new Mobil();
            $mobil->nama_mobil = $request->nama_mobil;
            $mobil->brand_mobil = $request->brand_mobil;
            $mobil->plat_mobil = $request->plat_mobil;
            $mobil->mitra_mobil = $request->mitra_mobil;
            $result= $mobil->save();
            if($result){
                return back()->with("Success","Anda Telah Berhasil Registrasi");
            }
            else{
                return back()->with("Fail","Anda Gagal Registrasi");   
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
