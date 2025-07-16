@extends('admin.layouts.app')

@section('title','Portfolio')


@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    {{-- <h2>{{ isset($service) ? 'Edit' : 'Add' }} Service</h2> --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<!-- <p>Form action: {{ route('feature.store') }}</p> -->
  <div class="container mt-4">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ isset($portfolio) ? 'Update' : 'Add New' }} Portfolio</h5>
        </div>

        <div class="card-body">
            <form action="{{ isset($portfolio) ? route('portfolio.update', $portfolio->id) : route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($portfolio))
                    @method('PUT')
                @endif

                <div class="row">
                    <!-- Type -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control"
                               value="{{ old('type', $portfolio->type ?? '') }}" placeholder="e.g., Web Design">
                    </div>

                    <!-- Name -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control"
                               value="{{ old('name', $portfolio->name ?? '') }}" placeholder="Project name">
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="4" placeholder="Short description...">{{ old('description', $portfolio->description ?? '') }}</textarea>
                </div>

                <div class="row">
                    <!-- Image -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        @if(isset($portfolio) && $portfolio->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $portfolio->image) }}" class="rounded border" width="100" alt="Portfolio Image">
                            </div>
                        @endif
                    </div>

                    <!-- Status -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="1" {{ (old('status', $portfolio->status ?? '') == 1) ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ (old('status', $portfolio->status ?? '') == 0) ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button class="btn btn-{{ isset($portfolio) ? 'primary' : 'success' }}" type="submit">
                        {{ isset($portfolio) ? 'Update Portfolio' : 'Add Portfolio' }}
                    </button>
                    <a href="{{ route('portfolio.index') }}" class="btn btn-outline-secondary">Back to List</a>
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
