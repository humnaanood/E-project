@extends('dashboard.master')

@section('main')

<br>
<br>

<div class="container">
    <h2 class="mb-4">All Appointments</h2>
    <a href="{{ route('dashboard.Appointments.create') }}" class="btn btn-primary mb-3">+ New Appointment</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time Slot</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($appointments as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->user->name ?? '—' }}</td>
                    <td>{{ $a->service->name ?? '—' }}</td>
                    <td>{{ $a->appointment_date }}</td>
                    <td>{{ $a->time_slot }}</td>
                    <td>{{ ucfirst($a->payment_method) }}</td> {{-- ✅ fixed --}}
                    <td>{{ ucfirst($a->status) }}</td>
                    <td>
                        <a href="{{ route('dashboard.Appointments.show', $a->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('dashboard.Appointments.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dashboard.Appointments.destroy', $a->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this appointment?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="8" class="text-center">No appointments found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
