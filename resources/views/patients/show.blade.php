@extends('layouts.app')

@section('content')
    <h2>Patient #{{ $patient->id }}</h2>

    <p><strong>Student ID:</strong> {{ $patient->student_id }}</p>
    <p><strong>Name:</strong> {{ $patient->name }}</p>
    <p><strong>Course:</strong> {{ $patient->course }}</p>
    <p><strong>Year Level:</strong> {{ $patient->year_level }}</p>

    <p><a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a></p>

@endsection
