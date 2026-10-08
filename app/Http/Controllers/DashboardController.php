<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;


class DashboardController extends Controller
{
    public function index() {
        try {
            $patientCount = Patient::count();
        } catch (\Exception $e) {
            $patientCount = 0;
        }

        try {
            $doctorCount = Doctor::count();
        } catch (\Exception $e) {
            $doctorCount = 0;
        }

        try {
            $appointmentCount = Appointment::count();
        } catch (\Exception $e) {
            $appointmentCount = 0;
        }

        return view('dashboard', compact(
            'patientCount',
            'doctorCount',
            'appointmentCount'
        )); 
    }
}
