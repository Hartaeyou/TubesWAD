<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('Auth.Authlogin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registrasi()
    {
        return view('Auth.AuthRegistrasi');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|unique:data_registrasi_admin",
            "password" => "required|min:8|max:12",
        ]);
        $admin=new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $result= $admin->save();
        if($result){
            return back()->with("Success","Anda Telah Berhasil Registrasi");
        }
        else{
            return back()->with("Fail","Anda Gagal Registrasi");   
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required|min:8|max:12",
        ]);
        $admin= Admin::where("email","=",$request->email)->first();
        if($admin){
          if(Hash::check($request->password,$admin->password)){
            $request->session()->put("loginId",$admin->id);
            return redirect("dashboard");
          }
          else{
            return back()->with("Fail","Email atau Password Salah");
          }
        }
        else{
            return back()->with("Fail","Email atau Password tidak terdaftar");   
        }
    }
    public function logout(){
        if (Session::has("loginId")){           
            Session::pull("loginId");
        }
        return redirect("/");
    }
    
}
