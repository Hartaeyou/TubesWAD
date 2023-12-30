<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class mitraController extends Controller
{
    public function index()
    {
        return view('mitra/tampilanMitra');
    }

    public function showTable()
    {
        // Fetch data from the Mitra model
        $data_mitra = Mitra::all();

        // Pass data to the view
        return view('mitra.tampilanMitra', compact('data_mitra'));
    }
}

