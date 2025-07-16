@extends('admin.layouts.app')

@section('title','Features')



@section('content')

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    {{-- <h2>{{ isset($service) ? 'Edit' : 'Add' }} Features</h2> --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<!-- <p>Form action: {{ route('feature.store') }}</p> -->
    <!-- Stylish Feature Form -->
<div class="container mt-4">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ isset($feature) ? 'Update' : 'Add New' }} Feature</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('feature.store') }}" method="POST">
                @csrf
                <input type="hidden" name="feature_id" value="{{ $feature->id ?? '' }}">

                <div class="mb-3">
                    <label class="form-label">Feature Heading</label>
                    <input type="text" name="feature_heading" class="form-control" required
                           value="{{ $feature->feature_heading ?? '' }}" placeholder="Enter feature title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Feature Icon</label>
                    <input type="text" name="icon" class="form-control icp-auto"
                           value="{{ $feature->icon ?? '' }}" data-placement="bottomRight" placeholder="e.g., fa fa-star">
                </div>

                <div class="mb-3">
                    <label class="form-label">Feature Description</label>
                    <textarea id="feature_description" name="feature_description" rows="4" class="form-control" required placeholder="Write a brief description...">{{ $feature->feature_description ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ isset($feature) && $feature->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ isset($feature) && !$feature->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-{{ isset($feature) ? 'primary' : 'success' }}">
                        {{ isset($feature) ? 'Update' : 'Add' }} Feature
                    </button>
                    <a href="{{ route('feature.list') }}" class="btn btn-outline-secondary">Back to List</a>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
    </div>
</div>

<br>
@endsection

