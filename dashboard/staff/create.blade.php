@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>Add Staff</h2>

    <form action="{{ route('staff.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Salary (Rs.)</label>
            <input type="number" step="0.01" name="salary" class="form-control" required>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('staff.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
