@php use Illuminate\Support\Str; @endphp

@extends('admin.layouts.app')

@section('title','Protfolio')


@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Portfolios</h2>
 @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    @endif

     <a href="{{ route('portfolio.create') }}" class="btn btn-primary no-hover" style="color: white">Add New Protfolio</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Type</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
                      </thead>
                       <tbody>
                        @if($portfolios->isEmpty())
    <tr><td colspan="5">No Service found.</td></tr>
@else
                        @foreach($portfolios as $portfolio)
        <tr>
        <td><img src="{{ asset('storage/' . $portfolio->image) }}" width="80"></td>
        <td>{{ $portfolio->name }}</td>
        <td>{{ $portfolio->type }}</td>
        <td>{{ $portfolio->status ? 'Active' : 'Inactive' }}</td>
        <td>
            <a  class="btn btn-sm btn-warning" href="{{ route('portfolio.edit', $portfolio->id) }}">Edit</a>
            <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
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
              </div>
            </div>
          </div>

@endsection
