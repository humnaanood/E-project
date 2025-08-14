@extends('dashboard.master')
@section('main')

<br><br><br><br>

<div class="container">
    <h2>Payment Details</h2>

    <div class="card mt-4">
        <div class="card-body">
            <p><strong>Payment ID:</strong> {{ $payment->id }}</p>
            <p><strong>Order ID:</strong> {{ $payment->order_id ?? 'N/A' }}</p>
            <p><strong>Amount:</strong> Rs. {{ number_format($payment->amount, 2) }}</p>
            <p><strong>Payment Method:</strong> {{ ucfirst($payment->payment_method) }}</p>
            <p><strong>Status:</strong> {{ ucfirst($payment->status) }}</p>
            <p><strong>Paid On:</strong> {{ $payment->created_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back to Payments</a>
        <a href="{{ route('payments.edit', $payment) }}" class="btn btn-warning">Edit Payment</a>
    </div>
</div>

@endsection
