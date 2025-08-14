@extends('website.layout')
@section('content')

<br><br><br><br>

<div class="container">
    <h2>Order Details</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h4>Customer: {{ $order->customer_name }}</h4>
            <p><strong>Product:</strong> {{ $order->product }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Total Price (Rs.):</strong> {{ $order->total_price }}</p>
            <p><strong>Created At:</strong> {{ $order->created_at->format('d M Y, h:i A') }}</p>
            <p><strong>Updated At:</strong> {{ $order->updated_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
    </div>
</div>

@endsection
