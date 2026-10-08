<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::all();

        return view('patients.index',
        compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'course' => 'nullable|string|max:255',
            'year_level' => 'nullable|string|max:50'
        ]);

        Patient::create($data);

        return redirect()->route('patients.index')->with('success', 'Patient created.');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $data = $request->validate([
            'student_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'course' => 'nullable|string|max:255',
            'year_level' => 'nullable|string|max:50'
        ]);

        $patient->update($data);

        return redirect()->route('patients.index')->with('success', 'Patient updated.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted.');
    }
}
