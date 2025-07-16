@extends('admin.layouts.app')

@section('title','Service')


@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    {{-- <h2>{{ isset($service) ? 'Edit' : 'Add' }} Service</h2> --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<!-- <p>Form action: {{ route('feature.store') }}</p> -->
   <div class="container mt-2">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ isset($service) ? 'Update' : 'Add New' }} Service</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->id ?? '' }}">

                <!-- Service Name -->
                <div class="mb-3">
                    <label class="form-label">Service Name</label>
                    <input type="text" name="service_name" class="form-control" required
                           value="{{ $service->service_name ?? '' }}" placeholder="Enter service name">
                </div>

                <!-- Service Image -->
                <div class="mb-3">
                    <label class="form-label">Service Image</label><br>
                    @if(!empty($service->service_image))
                        <img src="{{ asset('storage/' . $service->service_image) }}" class="mb-2 rounded border" style="width: 100px; height: auto;">
                    @endif
                    <input type="file" name="service_image" class="form-control mt-2">
                </div>

                <!-- Service Description -->
                <div class="mb-3">
                    <label class="form-label">Service Description</label>
                    <textarea name="service_description" class="form-control" rows="4" required placeholder="Enter a brief description...">{{ $service->service_description ?? '' }}</textarea>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ isset($service) && $service->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ isset($service) && !$service->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button class="btn btn-{{ isset($service) ? 'primary' : 'success' }}" type="submit">
                        {{ isset($service) ? 'Update' : 'Add' }} Service
                    </button>
                    <a href="{{ route('service.index') }}" class="btn btn-outline-secondary">Back to List</a>
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
