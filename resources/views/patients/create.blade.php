@extends('layouts.app')

@section('content')
    <h2>Create Patient</h2>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Student ID</label>
            <input type="text" name="student_id" class="form-control" />
        </div>

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" />
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" />
        </div>

        <div class="mb-3">
            <label>Year Level</label>
            <input type="text" name="year_level" class="form-control" />
        </div>

        <button class="btn btn-primary">Create</button>
    </form>

@endsection
