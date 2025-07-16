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
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: What type of software development services do you provide?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            A:We offer custom software solutions, including mobile apps, web applications, ERP/CRM systems, and cloud-based platforms tailored to your business needs
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: How long does it take to build custom software?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: The timeline depends on project complexity, features, and platform. A simple application may take 4–6 weeks, while complex systems could take several months
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: What technologies do you work with?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: We specialize in Java, Kotlin, Flutter, Laravel, Python Django, PHP, and modern front-end frameworks like React and Vue.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            Q:  Will I get updates during development?
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Yes! We maintain full transparency and provide regular updates through calls, emails, or project management tools like Trello or Jira.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Q:  Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Absolutely. We provide ongoing support, bug fixing, and feature upgrades to ensure your application performs smoothly.
                                        </div>
                                    </div>
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
