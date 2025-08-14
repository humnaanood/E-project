@extends('website.layout')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4 text-success"><i class="fa fa-calendar-check me-2"></i> Create Appointment</h2>

    <div class="card shadow-lg border-0">
        <div class="card-body p-4" style="background-color: #fdfdf7; border-radius: 10px;">
            <form action="{{ route('dashboard.Appointments.store') }}" method="POST">
                @csrf

                <!-- User -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Select User</label>
                    <select name="user_id" class="form-select" required>
                        <option value="">-- Choose User --</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Service -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Select Service</label>
                    <select name="service_id" class="form-select" required>
                        <option value="">-- Choose Service --</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                    @error('service_id') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Date -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Appointment Date</label>
                    <input type="date" name="appointment_date" class="form-control" required>
                    @error('appointment_date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Time Slot -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Time Slot</label>
                    <input type="text" name="time_slot" class="form-control" placeholder="e.g. 10:00 AM - 11:00 AM" required>
                    @error('time_slot') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Payment Method -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Payment Method</label>
                    <select name="payment_method" class="form-select" required>
                        <option value="">-- Select Payment Method --</option>
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                    </select>
                    @error('payment_method') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="booked">Booked</option>
                        <option value="cancelled">Cancelled</option>
                        <option value="completed">Completed</option>
                    </select>
                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success px-4"><i class="fa fa-save me-2"></i> Create</button>
                    <a href="{{ route('dashboard.Appointments.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .form-select:focus {
        border-color: #A3B18A;
        box-shadow: 0 0 6px rgba(132, 203, 125, 0.6);
        transition: all 0.3s ease;
    }
</style>
@endsection
