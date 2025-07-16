@php use Illuminate\Support\Str; @endphp

@extends('admin.layouts.app')

@section('title','Course')


@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Course</h2>
 @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    @endif

     <a href="{{ route('training.create') }}" class="btn btn-primary no-hover" style="color: white">Add New Course</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                  <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Type</th>
        <th>Fees</th>
        <th>Duration</th>
        <th>Start Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
                      </thead>
                       <tbody>
                        @if($trainings ->isEmpty())
    <tr><td colspan="5">No Service found.</td></tr>
@else
                        @foreach($trainings  as $training)
        <tr>
        <td>
            @if($training->image)
                <img src="{{ asset('storage/' . $training->image) }}" width="80">
            @endif
        </td>
        <td>{{ $training->name }}</td>
        <td>{{ $training->type }}</td>
        <td>{{ $training->fees }}</td>
        <td>{{ $training->duration }}</td>
        <td>{{ $training->start_date }}</td>
        <td>{{ $training->status ? 'Active' : 'Inactive' }}</td>
        <td>
            <a class="btn btn-sm btn-warning" href="{{ route('training.edit', $training->id) }}">Edit</a>
            <form  action="{{ route('training.destroy', $training->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>
    </tr>
        @endforeach
        @endif
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
    {!! $trainings->links('pagination::bootstrap-4') !!}
</div>
              </div>
            </div>
          </div>

@endsection
