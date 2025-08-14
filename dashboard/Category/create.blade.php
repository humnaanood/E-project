@extends('dashboard.master')

@section('main')
<div class="container mt-5">
    <h2 class="mb-4 text-success"><i class="fa fa-calendar-check me-2"></i> Creat Category</h2>

    <div class="card shadow-lg border-0">
        <div class="card-body p-4" style="background-color: #fdfdf7; border-radius: 10px;">
            <form action="{{ route('dashboard.Category.store') }}" method="POST">
                @csrf

                <!-- User -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Select Category</label>
                    <select name="user_id" class="form-select" required>
                        <option value="">-- Choose Category --</option>
                        @foreach($users as $user)
                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                        @endforeach
                    </select>
                    @error('Category_id') <small class="text-danger">{{ $message }}</small> @enderror
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

              

               

                <!-- Category type -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Category type</label>
                    <select name="Category type" class="form-select" required>
                        <option value="">-- Select Category type --</option>
                        <option value="home">Home</option>
                        <select name="place">
    <optgroup label="Home">
        <option value="home_rooms">Rooms</option>
        <option value="home_kitchen">Kitchen</option>
        <option value="home_terrace">Terrace</option>
    </optgroup>
                        <option value="office">Office</option>
                           <optgroup label="Office">
        <option value="office_bossroom">Boss Room</option>
        <option value="office_cafe">Cafe / Kitchen</option>
        <option value="office_meeting">Meeting Room</option>
    </optgroup>
                        
                    </select>
                    @error('Category_type') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label fw-bold text-muted">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="Category created">Category created</option>
                        <option value="cancelled">Cancelled</option>
                        <option value="completed">Completed</option>
                    </select>
                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success px-4"><i class="fa fa-save me-2"></i> Create</button>
                    <a href="{{ route('dashboard.Category.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .form-select:focus {
        border-color: #b6d187;
        box-shadow: 0 0 6px rgba(99, 148, 94, 0.6);
        transition: all 0.3s ease;
    }
</style>
@endsection
