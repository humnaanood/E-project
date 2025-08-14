@extends('dashboard.master')
@section('main')

<br>
<br>
<br>
<br>

<div class="container">
    <h2>Edit Product Item</h2>

    <form action="{{ route('inventories.update', $inventory->id) }}" method="POST" class="mt-4">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="product_name" value="{{ $inventory->product_name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" value="{{ $inventory->quantity }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Reorder Level</label>
            <input type="number" name="reorder_level" value="{{ $inventory->reorder_level }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cost Price (Rs.)</label>
            <input type="number" step="0.01" name="cost_price" value="{{ $inventory->cost_price }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
