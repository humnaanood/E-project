@extends('website.layout')
@section('content')


<br>
<br>

<div class="container">
    <h2>Category Details</h2>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Name:</strong> {{ $category->user->name ?? '—' }}</p>
            <p><strong>Discription:</strong> {{ $category->Discription->details ?? '—' }}</p>
          <p><strong>Action:</strong> {{ ucfirst($category->Action) }}</p>

            <a href="{{ route('dashboard.Category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('dashboard.Category.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
