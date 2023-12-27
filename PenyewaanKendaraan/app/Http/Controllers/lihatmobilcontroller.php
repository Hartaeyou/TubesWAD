<?php

namespace App\Http\Controllers;

use App\Models\lihatmobil;
use Illuminate\Http\Request;

class lihatmobilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("mobil/lihatmobil");
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
    }

    /**
     * Display the specified resource.
     */
    public function show(lihatmobil $lihatmobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lihatmobil $lihatmobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lihatmobil $lihatmobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lihatmobil $lihatmobil)
    {
        //
    }
}
