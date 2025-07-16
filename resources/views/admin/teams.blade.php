@php use Illuminate\Support\Str; @endphp

@extends('admin.layouts.app')

@section('title','Teams')


@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Teams</h2>
 @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    @endif

     <a href="{{ route('teams.create') }}" class="btn btn-primary no-hover" style="color: white">Add New Members</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                       <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Social Links</th>
        <th>Action</th>
    </tr>
                      </thead>
                       <tbody>
                        @if($teams->isEmpty())
    <tr><td colspan="5">No Service found.</td></tr>
@else
                        @foreach($teams as $team)
         <tr>
        <td><img src="{{ asset('storage/' . $team->image) }}" width="80"></td>
        <td>{{ $team->name_employee }}</td>
        <td>{{ $team->designation_employee }}</td>
        <td>
            <a href="{{ $team->fb_link }}">Facebook</a><br>
            <a href="{{ $team->insta_link }}">Instagram</a><br>
            <a href="{{ $team->linked_link }}">LinkedIn</a>
        </td>
        <td>
            <a class="btn btn-sm btn-warning" href="{{ route('teams.edit', $team->id) }}">Edit</a>
            <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this member?')">Delete</button>
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
