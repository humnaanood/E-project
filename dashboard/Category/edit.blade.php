@extends('dashboard.master')

@section('main')

<br>
<br>

<div class="container">
    <h2>Edit Category</h2>

    <form action="{{ route('dashboard.Category.update', $category->id) }}" method="POST" class="mt-3">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">User</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $category->user_id ? 'selected' : '' }}>
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
            <input type="date" name="category_type" value="{{ $category->category_type }}" class="form-control" required>
            @error('acategory_type') <small class="text-danger">{{ $message }}</small> @enderror
        </div>



<div class="mb-3">
    <label class="form-label">Category type</label>
    <select name="category_type" class="form-control" required>
        <option value="">Select Category type</option>
        <option value="home" {{ $category->category_type == 'home' ? 'selected' : '' }}>Home</option>
        <option value="office" {{ $category->category_type == 'office' ? 'selected' : '' }}>Office</option>
    </select>
    @error('category_type') <small class="text-danger">{{ $message }}</small> @enderror
</div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="updated"   {{ $appointment->status=='updated'   ? 'selected':'' }}>Updated</option>
                <option value="cancelled"{{ $appointment->status=='cancelled'? 'selected':'' }}>Cancelled</option>
                <option value="completed"{{ $appointment->status=='completed'? 'selected':'' }}>Completed</option>
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard.Category.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
