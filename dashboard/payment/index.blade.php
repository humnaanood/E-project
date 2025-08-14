@extends('dashboard.master')
@section('main')

<br><br>

<div class="container">
    <h2>All Payments</h2>
    <a href="{{ route('Payments.create') }}" class="btn btn-primary mb-3">+ New Payment</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->payment_date }}</td>
                <td>
                    <a href="{{ route('Payment.show', $payment) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('Payment.edit', $payment) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('Payment.destroy', $payment) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this Payment?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No Payments found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>

@endsection
