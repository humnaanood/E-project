@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>All Staff</h2>
    <a href="{{ route('staff.create') }}" class="btn btn-primary mb-3">+ New Staff</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($staff as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->position }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->salary }}</td>
                <td>
                    <a href="{{ route('staff.show', $member) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('staff.edit', $member) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('staff.destroy', $member) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this staff member?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7">No staff members found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>

@endsection
