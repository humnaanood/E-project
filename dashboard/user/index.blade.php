@extends('dashboard.master')

@section('main')
<div class="container mt-4">
    <h2>All Users</h2>

    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

   <table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th> {{-- Add this --}}
        </tr>
    </thead>
    <tbody>
        @forelse($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('dashboard.User.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    
                    <form action="{{ route('dashboard.User.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center"> User not found. </td></tr>
        @endforelse
    </tbody>
</table>
</div>
@endsection
