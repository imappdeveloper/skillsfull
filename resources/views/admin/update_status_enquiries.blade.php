@extends('admin.layouts.app')

@section('title','Service')


@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    <h2>{{ isset($service) ? 'Edit' : 'Add' }} Service</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<!-- <p>Form action: {{ route('feature.store') }}</p> -->
   <form action="{{ route('enquiry.update', $enquiry->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control" required>
                <option value="pending" {{ $enquiry->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="resolved" {{ $enquiry->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                <option value="closed" {{ $enquiry->status == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('enquiry.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
    </div>
</div>

<br>
@endsection
