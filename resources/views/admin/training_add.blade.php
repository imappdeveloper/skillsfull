@extends('admin.layouts.app')

@section('title','Course')


@section('content')

<div class="container mt-2">
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
            <h5 class="mb-0">{{ isset($training) ? 'Update' : 'Add New' }} Training Program</h5>
        </div>

        <div class="card-body">
            <form action="{{ isset($training) ? route('training.update', $training->id) : route('training.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($training))
                    @method('PUT')
                @endif

                <div class="row g-3">
                    <!-- Name -->
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $training->name ?? '') }}" required>
                    </div>

                    <!-- Type -->
                    <div class="col-md-6">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" value="{{ old('type', $training->type ?? '') }}">
                    </div>

                    <!-- Fees -->
                    <div class="col-md-6">
                        <label class="form-label">Fees</label>
                        <input type="number" name="fees" class="form-control" value="{{ old('fees', $training->fees ?? '') }}">
                    </div>

                    <!-- Duration -->
                    <div class="col-md-6">
                        <label class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" value="{{ old('duration', $training->duration ?? '') }}">
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $training->start_date ?? '') }}">
                    </div>

                    <!-- Hours -->
                    <div class="col-md-6">
                        <label class="form-label">Hours</label>
                        <input type="text" name="hours" class="form-control" value="{{ old('hours', $training->hours ?? '') }}">
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Write a brief description...">{{ old('description', $training->description ?? '') }}</textarea>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ old('status', $training->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $training->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        @if(isset($training) && $training->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $training->image) }}" width="100" class="img-thumbnail" alt="Training Image">
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 text-end mt-3">
                        <button type="submit" class="btn btn-{{ isset($training) ? 'primary' : 'success' }}">
                            {{ isset($training) ? 'Update Training' : 'Add Training' }}
                        </button>
                        <a href="{{ route('training.index') }}" class="btn btn-outline-secondary ms-2">Back to List</a>
                    </div>
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
