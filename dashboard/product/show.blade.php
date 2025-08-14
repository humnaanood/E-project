@extends('dashboard.master')
@section('main')

<br>
<br>
<br>
<br>


<div class="container">
    <h2>Product Details</h2>

    <div class="card mt-3">
        <div class="card-body">
            <h5><strong>Product:</strong> {{ $inventory->product_name }}</h5>
            <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
            <p><strong>Reorder Level:</strong> {{ $inventory->reorder_level }}</p>
            <p><strong>Cost Price:</strong> Rs. {{ number_format($inventory->cost_price, 2) }}</p>

            <a href="{{ route('product.edit', $inventory->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
