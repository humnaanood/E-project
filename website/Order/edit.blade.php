@extends('website.layout')
@section('content')

<br><br><br><br>

<div class="container">
    <h2>Edit Order</h2>

    <form action="{{ route('Orders.update', $order) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" value="{{ $order->customer_name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Product</label>
            <input type="text" name="product" class="form-control" value="{{ $order->product }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Price (Rs.)</label>
            <input type="number" step="0.01" name="total_price" class="form-control" value="{{ $order->total_price }}" required>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('Orders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
