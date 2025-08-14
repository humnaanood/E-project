@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>User Details</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">{{ $user->name }}</h4>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ ucfirst($user->role ?? 'User') }}</p>
            <p><strong>Created At:</strong> {{ $user->created_at->format('d M Y, h:i A') }}</p>
            <p><strong>Last Updated:</strong> {{ $user->updated_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit User</a>
    </div>
</div>

@endsection
