<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::latest()->paginate(10);
        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:staff,email',
            'phone' => 'required',
            'salary' => 'required|numeric',
        ]);

        Staff::create($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff added successfully.');
    }

    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:staff,email,' . $staff->id,
            'phone' => 'required',
            'salary' => 'required|numeric',
        ]);

        $staff->update($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff updated successfully.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff deleted successfully.');
    }
}
