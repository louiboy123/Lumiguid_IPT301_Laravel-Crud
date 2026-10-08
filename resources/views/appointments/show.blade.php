@extends('layouts.app')

@section('content')
    <h2>Appointment #{{ $appointment->id }}</h2>

    <p><strong>Patient:</strong> {{ optional($appointment->patient)->name }}</p>
    <p><strong>Doctor:</strong> {{ optional($appointment->doctor)->name }}</p>
    <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
    <p><strong>Status:</strong> {{ $appointment->status }}</p>

    <p><a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a></p>

@endsection
