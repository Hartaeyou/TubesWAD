<?php

namespace App\Http\Controllers;

use App\Models\index;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("sesiLogin/index");
    }

    function login(Request $request)
    {
        $request->validate(
            ["email"=>"required", "password"=>"required"],
            ["email.required"=>"Email Wajib Diisi", "password.required"=>"Password Wajib Diisi"]
        );
        $logininfo=[

            "email"=> $request->email,
            "password"=> $request->password,
        ];
        if(Auth::attempt($logininfo)) {
            // autentikasi berhasil
            return "hoho";
        }
        else {
            return "hehe";
        }

    }
}
