<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $employees = Admin::all(); 
        return view('admin.admin', compact('employees'));
    }
    public function create()
    {
        return view('admin.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:data_registrasi_admin',
            'password' => 'required|min:6',
        ]);

        Admin::create($request->all());

        return redirect()->route('admin.view')->with('success', 'Employee added successfully');
    }

    public function edit($id)
    {
        $employee = Admin::find($id); // Find the employee by ID
        return view('admin.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the employee
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:data_registrasi_admin,email,' . $id,
            'password' => 'required|min:6',
        ]);

        $employee = Admin::find($id);
        $employee->update($request->all());

        return redirect()->route('admin.view')->with('success', 'Employee updated successfully');
    }

    public function destroy($id)
    {
        $employee = Admin::find($id);
        $employee->delete();

        return redirect()->route('admin.view')->with('success', 'Employee deleted successfully');
    }
    public function settings()
    {
    return view('admin.settings');
}

}