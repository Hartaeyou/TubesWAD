<?php

namespace App\Http\Controllers;

use App\Models\tambahmobil;
use Illuminate\Http\Request;

class tambahmobilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        $validateData = $request->validate([
            'nama_mobil' => 'required',
            'brand_mobil' => 'required',
            'warna_mobil' => 'required',
            'plat_mobil' => 'required',
            'mitra_mobil' => 'required'
        ]);

        $tambahmobil = tambahmobil::create([
            'nama_mobil' => $validateData['nama_mobil'],
            'brand_mobil' => $validateData['brand_mobil'],
            'warna_mobil' => $validateData['warna_mobil'],
            'plat_mobil' => $validateData['plat_mobil'],
            'mitra_mobil' => $validateData['mitra_mobil'],
        ]);

        if($tambahmobil){
            return back()->with("Success","bisa");
        }
        else{
            return back()->with("Fail","gabisa");   
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tambahmobil $tambahmobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tambahmobil $tambahmobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tambahmobil $tambahmobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tambahmobil $tambahmobil)
    {
        //
    }
}
