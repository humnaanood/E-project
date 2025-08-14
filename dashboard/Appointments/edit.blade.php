@extends('dashboard.master')

@section('main')

<br>
<br>

<div class="container">
    <h2>Edit Appointment</h2>

    <form action="{{ route('dashboard.Appointments.update', $appointment->id) }}" method="POST" class="mt-3">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">User</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $appointment->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            @error('user_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Service</label>
            <select name="service_id" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ $service->id == $appointment->service_id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
            @error('service_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="appointment_date" value="{{ $appointment->appointment_date }}" class="form-control" required>
            @error('appointment_date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Time Slot</label>
            <input type="text" name="time_slot" value="{{ $appointment->time_slot }}" class="form-control" required>
            @error('time_slot') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


<div class="mb-3">
    <label class="form-label">Payment Method</label>
    <select name="payment_method" class="form-control" required>
        <option value="">Select Payment Method</option>
        <option value="cash" {{ $appointment->payment_method == 'cash' ? 'selected' : '' }}>Cash</option>
        <option value="card" {{ $appointment->payment_method == 'card' ? 'selected' : '' }}>Card</option>
    </select>
    @error('payment_method') <small class="text-danger">{{ $message }}</small> @enderror
</div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="booked"   {{ $appointment->status=='booked'   ? 'selected':'' }}>Booked</option>
                <option value="cancelled"{{ $appointment->status=='cancelled'? 'selected':'' }}>Cancelled</option>
                <option value="completed"{{ $appointment->status=='completed'? 'selected':'' }}>Completed</option>
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard.Appointments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
