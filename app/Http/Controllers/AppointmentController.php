<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->paginate(10);
        return view('Appointment.index', compact('Appointment'));
    }

    public function create()
    {
        return view('Appointment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'service' => 'required',
        ]);

        Appointment::create($request->all());

        return redirect()->route('Appointment.index')->with('success', 'Appointment booked successfully.');
    }

    public function show(Appointment $appointment)
    {
        return view('Appointment.show', compact('Appointment'));
    }

    public function edit(Appointment $appointment)
    {
        return view('Appointment.edit', compact('Appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'service' => 'required',
        ]);

        $appointment->update($request->all());

        return redirect()->route('Appointment.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('Appointment.index')->with('success', 'Appointment deleted successfully.');
    }
}
