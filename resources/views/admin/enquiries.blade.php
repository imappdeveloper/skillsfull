@php use Illuminate\Support\Str; @endphp

@extends('admin.layouts.app')

@section('title','Enquiries')


@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h2>Enquiries</h2>
 @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>
    @endif

     {{-- <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Add New Service</a> --}}
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Contact</th>
                <th>Type</th><th>Subject</th><th>Status</th><th>Action</th>
            </tr>
                      </thead>
                       <tbody>
                        @if($enquiries ->isEmpty())
    <tr><td colspan="5">No Service found.</td></tr>
@else
                        @foreach($enquiries  as $enquiry)
        <tr>
                <td>{{ $enquiry->id }}</td>
                <td>{{ $enquiry->name }}</td>
                <td>{{ $enquiry->email }}</td>
                <td>{{ $enquiry->contact }}</td>
                <td>{{ $enquiry->type }}</td>
                <td>{{ $enquiry->subject }}</td>
                <td>{{ $enquiry->status }}</td>
                <td>
                    <a href="{{ route('enquiry.edit', $enquiry->id) }}" class="btn btn-primary btn-sm">Update Status</a>
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
