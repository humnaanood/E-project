@extends('website.layout')
@section('content')
<div class="container mt-5">
    <h2>All Orders</h2>
    <a href="{{ route('Orders.create') }}" class="btn btn-primary mb-3">+ New Order</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->product }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->total_price }}</td>
            <td>
                <a href="{{ route('Orders.edit', $order) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('Orders.destroy', $order) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
