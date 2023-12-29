<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class pelangganController extends Controller
{
    public function index(){
        return view("pelanggan.tambahpelanggan");
    }

    public function formSubmit(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "nomorHandphone" => "required",
            "email" => "required",
        ]);

        $tambah = Pelanggan::create([
            "nama" => $validatedData["nama"],
            "nomorHandphone" => $validatedData["nomorHandphone"],
            "email" => $validatedData["email"],
        ]);
        if ($tambah){
            return back()->with("success", "Data Pelanggan telah Ditambah");
        }else{
            return back();
        }
    }
    
    public function showTable(){
        $data = Pelanggan::simplePaginate(5);
        return  view("pelanggan.tabelpelanggan",["data_customer"=>$data]);
    }
}
