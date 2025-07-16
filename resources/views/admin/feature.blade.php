@extends('admin.layouts.app')

@section('title','Features')


@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Features</h2>
 @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    @endif

    <a href="{{ route('feature.create') }}" class="btn btn-primary no-hover" style="color: white">Add New Feature</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
            <th>ID</th>
            <th>Heading</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
                      </thead>
                       <tbody>
                        @if($features->isEmpty())
    <tr><td colspan="5">No features found.</td></tr>
@else
                        @foreach($features as $feature)
        <tr>
            <td>{{ $feature->id }}</td>
            <td>{{ $feature->feature_heading }}</td>
            <td>{{ $feature->feature_description }}</td>
            <td>{{ $feature->status ? 'Active' : 'Inactive' }}</td>
            <td>
                <a href="{{ route('feature.edit', $feature->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('feature.delete', $feature->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete this feature?')" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection
