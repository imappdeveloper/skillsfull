@php use Illuminate\Support\Str; @endphp

@extends('admin.layouts.app')

@section('title','Topics')


@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Topics</h2>
 @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    @endif

     <a href="{{ route('topics.create') }}" class="btn btn-primary no-hover" style="color: white">Add Topic</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                 <tr>
                <th>Training</th>
                <th>Topic Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
                      </thead>
                       <tbody>
                        @if($topics ->isEmpty())
    <tr><td colspan="5">No Service found.</td></tr>
@else
                        @foreach($topics  as $topic)
        <tr>
                <td>{{ $topic->training->name ?? 'N/A' }}</td>
                <td>{{ $topic->topic_name }}</td>
                <td>{{ Str::limit($topic->topic_description, 50) }}</td>
                <td>{{ $topic->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('topics.destroy', $topic->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        @endif
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center">
    {!! $topics->links('pagination::bootstrap-4') !!}
</div>
              </div>
            </div>
          </div>

@endsection
