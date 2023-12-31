<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class motorController extends Controller
{

    public function index()
    {
        return view('motor.tampilanmotor');
    }

    public function list()
    {
        $motors = Motor::all();
        return view('motor.listmotor', ['motors' => $motors]);
    }

    public function formtambah()
    {
        return view('motor.tambahmotor');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'brand' => 'required',
            'warna' => 'required',
            'plat' => 'required',
        ]);
    
        $data=Motor::create([
            'nama_motor' => $request->nama,
            'brand_motor' => $request->brand,
            'warna_motor' => $request->warna,
            'plat_motor' => $request->plat,
            'mitra_motor' => $request->mitra_motor ?? '',
        ]);

        if ($data){
            return redirect()->route('motor')->with('success', 'Data berhasil disimpan');
        }else{
            return back();
        }
    }    

    public function update($id)
    {
        $motor = Motor::find($id);
    
        if (!$motor) {
            return redirect()->route('listmotor')->with('error', 'Data not found');
        }
    
        return view('motor.updatemotor', compact('motor'));
    }
    
    public function updateMotor(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'brand' => 'required',
            'warna' => 'required',
            'plat' => 'required',
        ]);
    
        $motor = Motor::find($id);
    
        if (!$motor) {
            return redirect()->route('listmotor')->with('error', 'Data not found');
        }
    
        $motor->update([
            'nama_motor' => $request->nama,
            'brand_motor' => $request->brand,
            'warna_motor' => $request->warna,
            'plat_motor' => $request->plat,
        ]);
    
        return redirect()->route('listmotor')->with('success', 'Data Telah Terganti');
    }

    public function delete($id)
    {
        $motor = Motor::find($id);

        if (!$motor) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        $motor->delete();

        return response()->json(['success' => 'Data berhasil dihapus']);
    }

    public function detailmotor($id)
    {
        $motor = Motor::find($id);

        if (!$motor) {
            return redirect()->route('listmotor')->with('error', 'Data not found');
        }

        return view('motor.detailmotor', ['motor' => $motor]);
    }

}