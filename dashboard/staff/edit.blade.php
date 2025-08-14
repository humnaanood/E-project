@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>Edit Staff</h2>

    <form action="{{ route('staff.update', $staff) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $staff->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" value="{{ $staff->position }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $staff->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $staff->phone }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Salary (Rs.)</label>
            <input type="number" step="0.01" name="salary" value="{{ $staff->salary }}" class="form-control" required>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('staff.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
