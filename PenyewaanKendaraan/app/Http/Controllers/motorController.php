<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class motorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor\tampilanmotor');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('motor\tambahmotor');
    }

    public function show()
    {
        return view('motor\lihatmotor');
    }

    public function detail()
    {
        return view('motor\detailmotor');
    }

    // public function data(Request $request)
    // {
    //     $data = $request->all();

    //     Showroom::create([
    //         'nama_mobil' => $data['name'],
    //         'brand_mobil' => $data['brand'],
    //         'warna_mobil' => $data['warna'],
    //         'tipe_mobil' => $data['tipe'],
    //         'harga_mobil' => $data['harga']
    //     ]);

    //     return redirect(route('mobil.index'));
    // }
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Motor $motor)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Motor $motor)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Motor $motor)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Motor $motor)
    // {
    //     //
    // }
}
