@extends('layouts.app')
@section('content')
<h2>List of Patients</h2>
    <p><a href="{{ route('patients.create') }}" class="btn btn-primary">Create Patient</a></p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient )
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->student_id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->course }}</td>
                    <td>{{ $patient->year_level }}</td>
                    <td>
                        <a href="{{ route('patients.edit', $patient) }}" class="btn btn-sm btn-secondary">Edit</a>
                        <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this patient?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection