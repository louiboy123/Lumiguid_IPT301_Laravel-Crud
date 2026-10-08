@extends('layouts.app')

@section('content')
    <h2>Edit Patient</h2>

    <form action="{{ route('patients.update', $patient) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="student_id" class="form-control" value="{{ $patient->student_id }}" />
        </div>

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $patient->name }}" />
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="{{ $patient->course }}" />
        </div>

        <div class="mb-3">
            <label>Year Level</label>
            <input type="text" name="year_level" class="form-control" value="{{ $patient->year_level }}" />
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

@endsection
