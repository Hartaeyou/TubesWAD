<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
   
    public function index()
    {
        return view("pemesanan.tampilanPemesanan");
    }

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

        $tambah=Pemesanan::create([
            'nama' => $validatedData['nama'],
            'jenis_kendaraan' => $validatedData['jenisKendaraan'],
            'plat' => $validatedData['plat'],
            'pembayaran' => $validatedData['pembayaran'],
            'tanggal_masuk' => $validatedData['tanggalMasuk'],
            'tanggal_keluar' => $validatedData['tanggalKeluar'],
        ]);
        if ($tambah){
            return back()->with('success', 'Pemesanan berhasil!');
        }else{
            return back();
        }
        
    }
    public function showTable(){
        $data= Pemesanan::simplePaginate(4);
        return view('pemesanan.tablePemesanan',['pemesanans'=>$data]);
    }

    public function formUpdate($id){
        $updateForm = Pemesanan::where('id',$id)->first();
        return view('pemesanan.formUpdatePemesanan', compact('updateForm'));
   
    }
    public function update(Request $request, $id){
        $updateForm = Pemesanan::where('id',$id)->first();
        $updateForm->update($request->all());
        return redirect('tablePemesanan')->with('success', 'Data Telah Terganti');
    }
    public function delete($id){
        $deleteForm = Pemesanan::where('id',$id);
        $deleteForm->delete();
        return back()->with('success', 'Data Telah Dihapus');

    }
}
