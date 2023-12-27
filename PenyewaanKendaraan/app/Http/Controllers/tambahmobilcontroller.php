<?php

namespace App\Http\Controllers;

use App\Models\tambahmobil;
use Illuminate\Http\Request;

class tambahmobilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("mobil/tambahmobil");
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
    public function show(tambahmobil $tambahmobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tambahmobil $tambahmobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tambahmobil $tambahmobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tambahmobil $tambahmobil)
    {
        //
    }
}
