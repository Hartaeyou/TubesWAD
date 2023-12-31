<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class pelangganController extends Controller
{
    public function index(){
        return view("pelanggan/tambahpelanggan");
    }

    public function formTambah(Request $request)
    {
        $request->validate([
            "nama_customer" => "required",
            "nomor_telepon" => "required|max:11",
            "email_customer" => "required",
        ]);

        $pelanggan=new Pelanggan();
        $pelanggan->nama_customer = $request->nama_customer;
        $pelanggan->nomor_telepon = $request->nomor_telepon;
        $pelanggan->email_customer = $request->email_customer;
        $tambah= $pelanggan->save();
        if ($tambah){
            return redirect("tabelPelanggan")->with("success", "Data Pelanggan telah Ditambah");
        }else{
            return back();
        }
    }
    
    public function showTabelPelanggan(){
        $pelanggan= Pelanggan::simplePaginate(10);
        $pelanggan= Pelanggan::select("*")->get();
        return  view("pelanggan/tabelpelanggan",["data_customer"=>$pelanggan]);
    }

    public function showDetail($id){
        $pelanggan = Pelanggan::where("id", $id)->first();
        return view("pelanggan/detailpelanggan",compact('pelanggan'));
    }

    public function ubah(Request $request, $id){
        $pelanggan = Pelanggan::where('id',$id)->first();
        $pelanggan->update($request->all());
        return redirect('tabelPelanggan')->with('success', 'Data Telah Diganti');
    }

    public function hapus($id){
        $pelanggan = Pelanggan::where('id',$id)->first();
        $pelanggan->delete();
        return redirect('tabelPelanggan')->with('success', 'Data telah Diganti');
    }

    public function showHome(){
        return view("pelanggan/homepelanggan");
    }
}
