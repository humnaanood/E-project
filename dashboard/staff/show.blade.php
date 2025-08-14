@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>Staff Details</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h4>Name: {{ $staff->name }}</h4>
            <p><strong>Position:</strong> {{ $staff->position }}</p>
            <p><strong>Email:</strong> {{ $staff->email }}</p>
            <p><strong>Phone:</strong> {{ $staff->phone }}</p>
            <p><strong>Salary (Rs.):</strong> {{ $staff->salary }}</p>
            <p><strong>Joined:</strong> {{ $staff->created_at->format('d M Y, h:i A') }}</p>
            <p><strong>Updated:</strong> {{ $staff->updated_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('staff.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('staff.edit', $staff) }}" class="btn btn-warning">Edit</a>
    </div>
</div>

@endsection
