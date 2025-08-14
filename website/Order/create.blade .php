@extends('website.layout')
@section('content')

<div class="container mt-5">
    <h2>Add Order</h2>
    <form action="{{ route('Orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Product</label>
            <input type="text" name="product" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Total Price (Rs.)</label>
            <input type="number" step="0.01" name="total_price" class="form-control" required>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('Orders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
