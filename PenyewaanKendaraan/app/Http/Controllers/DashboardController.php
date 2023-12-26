<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class DashboardController extends Controller{
public function index(){
    if(Session::has("loginId")){
        return view('dashboard.dashboard');
        }
    }   
}