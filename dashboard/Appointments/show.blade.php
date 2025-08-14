@extends('dashboard.master')

@section('main')


<br>
<br>

<div class="container">
    <h2>Appointment Details</h2>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $appointment->id }}</p>
            <p><strong>User:</strong> {{ $appointment->user->name ?? '—' }}</p>
            <p><strong>Service:</strong> {{ $appointment->service->name ?? '—' }}</p>
            <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
            <p><strong>Time Slot:</strong> {{ $appointment->time_slot }}</p>
            <p><strong>Status:</strong> {{ ucfirst($appointment->status) }}</p>

            <a href="{{ route('dashboard.Appointments.edit', $appointment->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('dashboard.Appointments.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
