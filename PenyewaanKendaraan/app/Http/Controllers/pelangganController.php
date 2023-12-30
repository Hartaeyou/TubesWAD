<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class pelangganController extends Controller
{
    public function index(){
        return view("pelanggan.tambahpelanggan");
    }

    public function formTambah(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "nomorHandphone" => "required|max:11",
            "email" => "required",
        ]);

        $tambah = Pelanggan::create([
            "nama_customer" => $validatedData["nama"],
            "nomor_telepon" => $validatedData["nomorHandphone"],
            "email_customer" => $validatedData["email"],
        ]);
        if ($tambah){
            return back()->with("success", "Data Pelanggan telah Ditambah");
        }else{
            return back();
        }
    }
    
    public function showTabelPelanggan(){
        $data= Pelanggan::simplePaginate(4);
        return  view("pelanggan.tabelpelanggan",["data_customer"=>$data]);
    }

    public function showDetail(){
        return view("pelanggan.detailpelanggan");
    }

    public function showEdit(){
        return view("pelanggan.editpelanggan");
    }

    public function showHome(){
        return view("pelanggan.homepelanggan");
    }
}