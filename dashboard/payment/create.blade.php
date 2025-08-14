@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>Add Payment</h2>

    <form action="{{ route('Payments.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label class="form-label">Payment Method</label>
            <input type="text" name="payment_method" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Amount (Rs.)</label>
            <input type="number" step="0.01" name="amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Payment Date</label>
            <input type="date" name="payment_date" class="form-control" required>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('Payments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
