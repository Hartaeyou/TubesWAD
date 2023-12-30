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
        $mobil = Mobil::select('*')->get() ;
        return view('mobil/lihatmobil', ['mobil' => $mobil]);
    }
    public function indextambah()
    {
        //
        return view("mobil/tambahmobil");

        
    }
    public function edit($id){
        $mobil = Mobil::where('id',$id)->first();
        return view('mobil/updatemobil', compact('mobil'));
   
    }

    public function update(Request $request, $id){
        $mobil = Mobil::where('id',$id)->first();
        $mobil->update($request->all());
        return redirect('lihatmobil')->with('success', 'Data Telah Terganti');
}

    public function delete($id){
        $mobil = Mobil::where('id',$id)->first();
        $mobil->delete();
        return redirect('lihatmobil')->with('success', 'Data Telah Terhapus');
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
            $mobil->warna_mobil = $request->warna_mobil;
            $mobil->plat_mobil = $request->plat_mobil;
            $mobil->mitra_mobil = $request->mitra_mobil;
            $result= $mobil->save();
            if($result){
                return redirect("lihatmobil")->with("success","Data Berhasil Ditambah");
            }
            else{
                return back()->with("Fail","Data Gagal Ditambah");   
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

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
