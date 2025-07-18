@extends('admin.layouts.app')

@section('title','Course')


@section('content')

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-10">
    {{-- <h2>{{ isset($service) ? 'Edit' : 'Add' }} Topics</h2> --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<!-- <p>Form action: {{ route('feature.store') }}</p> -->
   <div class="container mt-4">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ isset($training) ? 'Update' : 'Add New' }} Topics</h5>
        </div>

        <div class="card-body">
           <form action="{{ isset($topic) ? route('topics.update', $topic->id) : route('topics.store') }}" method="POST">
        @csrf
        @if(isset($topic)) @method('PUT') @endif

        <div class="form-group">
            <label for="training_id">Select Training</label>
            <select name="training_id" class="form-control" required>
                <option value="">Select</option>
                @foreach($trainings as $training)
                    <option value="{{ $training->id }}" {{ old('training_id', $topic->training_id ?? '') == $training->id ? 'selected' : '' }}>
                        {{ $training->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Topic Name</label>
            <input type="text" name="topic_name" class="form-control" value="{{ old('topic_name', $topic->topic_name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="topic_description" class="form-control">{{ old('topic_description', $topic->topic_description ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="1" {{ old('status', $topic->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status', $topic->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($topic) ? 'Update' : 'Save' }}</button>
    </form>
        </div>
    </div>
</div>


</div>
    </div>
</div>

<br>
@endsection
