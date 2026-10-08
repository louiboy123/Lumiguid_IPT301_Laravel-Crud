@extends('layouts.app')

@section('content')
    <h2>Create Appointment</h2>

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Patient</label>
            <select name="patient_id" class="form-control">
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Doctor</label>
            <select name="doctor_id" class="form-control">
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Appointment Date</label>
            <input type="datetime-local" name="appointment_date" class="form-control" />
        </div>

        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control" />
        </div>

        <button class="btn btn-primary">Create</button>
    </form>

@endsection
