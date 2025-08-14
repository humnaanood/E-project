@extends('dashboard.master')
@section('main')

<br>
<br>
<br>
<br>

<div class="container">
    <h2 class="mb-4">Product List</h2>
    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">+ Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Reorder Level</th>
                <th>Cost Price (Rs.)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inventories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->reorder_level }}</td>
                    <td>{{ number_format($item->cost_price, 2) }}</td>
                    <td>
                        <a href="{{ route('product.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this product?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center"> Items not found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
