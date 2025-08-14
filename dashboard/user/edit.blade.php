@extends('dashboard.master')

@section('main')
<div class="container mt-4">
    <h2>Edit User</h2>

    <form action="{{ route('dashboard.User.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>

        <div class="mb-3">
            <label>New Password <small>(leave blank to keep current)</small></label>
            <input type="password" name="password" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard.User.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
