@extends('layouts.app')

@section('title', 'Training')

@section('content')
<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Training</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">{{$trainnigdata->name}}</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <br>
        <div class="container-fluid bg-light about pb-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            {{-- <h4 class="text-primary">{{ $service->service_name }}</h4> --}}
                            <h3 class="display-7 mb-4">{{ $trainnigdata->name }}</h3>
                            <p>{{$trainnigdata->description ?? ' '}}
                            </p>
                            {{-- <p> We are Highly Appreciated & Trusted since 2024. Having Passionate .
                            </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>A dedicated team</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Providing software services</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Professional development experience</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a> --}}
                            <div class="h-100">
                            <div class="mb-5">
                                <h6 class="text-primary"> What You'll Teach in {{ $trainnigdata->name }} Training:</h6>

                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion" id="accordionExample">
    @forelse($trainnigdata->topics as $index => $topic)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $topic->id }}">
                <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $topic->id }}"
                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-controls="collapse{{ $topic->id }}">
                    {{ $topic->topic_name }}
                </button>
            </h2>
            <div id="collapse{{ $topic->id }}"
                 class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                 aria-labelledby="heading{{ $topic->id }}"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{ $topic->topic_description }}
                </div>
            </div>
        </div>
    @empty
        <p>No topics available.</p>
    @endforelse
</div>



                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded bg-light">
                                        <img src="{{ asset('storage/' . $trainnigdata->image) }}" class="img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
<div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Month </h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">{{$trainnigdata->duration }}</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Start Date</h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold">{{$trainnigdata->start_date}}</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Hours</h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" >{{$trainnigdata->hours}}</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <h4 class="mb-0 text-dark">Fees</h4>
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">{{$trainnigdata->fees}}</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




@endsection
