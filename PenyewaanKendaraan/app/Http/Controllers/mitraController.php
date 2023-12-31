<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class mitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data dari model mitra
        $data_mitra = Mitra::all();

        // kirim ke view
        return view('mitra.tampilanMitra', compact('data_mitra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mitra.tambahMitra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_mitra' => 'required|max:255',
            'nomor_telepon' => 'required|max:13',
            'alamat_mitra'  => 'required',
        ]);

        Mitra::create($validatedData);

        return redirect('/mitra')->with('success','Anda telah menambahkan mitra');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitra $mitra)
    {
        //
        return view('mitra.editMitra', [
        'mitra' => $mitra,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mitra $mitra)
    {
        //
        //
        $validatedData = $request->validate([
            'nama_mitra' => 'required|max:255',
            'nomor_telepon' => 'required|max:13',
            'alamat_mitra'  => 'required',
        ]);

        Mitra::where('id',$mitra->id)
                ->update( $validatedData );

        return redirect('/mitra')->with('success','Anda telah mengedit data mitra');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        //
        Mitra::destroy($mitra->id);

        return redirect('/mitra')->with('success','Anda telah menghapus data mitra');
    }
}
