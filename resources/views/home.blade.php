@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">Bringing Your Website to the Top of Search & Social.</h4>
                                    <h1 class="display-1 text-white mb-4">DIGITAL <br> MARKETING</h1>
                                    <p class="mb-5 fs-5">Marketing Strategy | SEO | Ads | Branding | Lead Generation
                                    </p>
                                    <!--<div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">-->
                                    <!--    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>-->
                                    <!--    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight">
                                <div class="calrousel-img" style="object-fit: cover;">
                                    <img src="{{ asset('img/banner1.png') }}" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                            
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">BUILD SMART SOFTWARE SOLUTIONS</h4>
                                    <h1 class="display-1 text-white mb-4">SOFTWARE DEVELOPMENT</h1>
                                    <p class="mb-5 fs-5">Desktop Applications |  Website Design & Development | Mobile App Development 
                                    </p>
                                    <!--<div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">-->
                                    <!--    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>-->
                                    <!--    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight">
                                <div class="calrousel-img">
                                    <img src="{{ asset('img/banner2.png') }}" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Feature Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="text-primary">Why SkillsFull ?</h1>
                    <!--<h1 class="display-4 mb-4">Insurance Provide you a Better Future</h1>-->
                    <!--<p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
                    <!--</p>-->
                </div>
                <div class="row g-4">
                    @foreach($features as $feature)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="{{$feature->icon}} fa-3x"></i>
                            </div>
                            <h4 class="mb-4">{{$feature->feature_heading ?? ''}}</h4>
                            <p class="mb-4">{{$feature->feature_description ?? ''}}
                            </p>
                            <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>-->
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- About Start -->
        <div class="container-fluid bg-light about pb-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            <h4 class="text-primary">About Our Company</h4>
                            <h1 class="display-4 mb-4">{{$setting->about_us_heading}}</h1>
                            <p>
                                {{$setting->about_us ?? ''}}
                            </p>
                            <p> We are Highly Appreciated & Trusted since 2024. Having Passionate .
                            </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>A dedicated team</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Providing software services</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Professional development experience</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded bg-light">
                                        <img src="{{ asset('img/about-1.png') }}" class="img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">100</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Clients</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">10</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Team Members</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">100</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Projects</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">4</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Year On the Market</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="text-primary">Our Solutions</h1>
                    <!--<h1 class="display-4 mb-4">We Provide Best Services</h1>-->
                    <!--<p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach($services as $service)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.{{$service->id+1}}s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('storage/' . $service->service_image) }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-desktop fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">{{$service->service_name ?? ''}}</a>
                                    <p class="mb-4">{{$service->service_description ?? ''}}</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">-->
                    <!--    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- FAQs Start -->
        <!--<div class="container-fluid faq-section bg-light py-5">-->
        <!--    <div class="container py-5">-->
        <!--        <div class="row g-5 align-items-center">-->
        <!--            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">-->
        <!--                <div class="h-100">-->
        <!--                    <div class="mb-5">-->
        <!--                        <h4 class="text-primary">Some Important FAQ's</h4>-->
        <!--                        <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>-->
        <!--                    </div>-->
        <!--                    <div class="accordion" id="accordionExample">-->
        <!--                        <div class="accordion-item">-->
        <!--                            <h2 class="accordion-header" id="headingOne">-->
        <!--                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
        <!--                                    Q: What happens during Freshers' Week?-->
        <!--                                </button>-->
        <!--                            </h2>-->
        <!--                            <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
        <!--                                <div class="accordion-body rounded">-->
        <!--                                    A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="accordion-item">-->
        <!--                            <h2 class="accordion-header" id="headingTwo">-->
        <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
        <!--                                    Q: What is the transfer application process?-->
        <!--                                </button>-->
        <!--                            </h2>-->
        <!--                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
        <!--                                <div class="accordion-body">-->
        <!--                                    A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="accordion-item">-->
        <!--                            <h2 class="accordion-header" id="headingThree">-->
        <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
        <!--                                    Q: Why should I attend community college?-->
        <!--                                </button>-->
        <!--                            </h2>-->
        <!--                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
        <!--                                <div class="accordion-body">-->
        <!--                                    A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">-->
        <!--                <img src="img/carousel-2.png" class="img-fluid w-100" alt="">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- FAQs End -->

        <!-- Blog Start -->
        <!--<div class="container-fluid blog py-5">-->
        <!--    <div class="container py-5">-->
        <!--        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">-->
        <!--            <h4 class="text-primary">From Blog</h4>-->
        <!--            <h1 class="display-4 mb-4">News And Updates</h1>-->
        <!--            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
        <!--            </p>-->
        <!--        </div>-->
        <!--        <div class="row g-4 justify-content-center">-->
        <!--            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">-->
        <!--                <div class="blog-item">-->
        <!--                    <div class="blog-img">-->
        <!--                        <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="blog-categiry py-2 px-4">-->
        <!--                            <span>Business</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="blog-content p-4">-->
        <!--                        <div class="blog-comment d-flex justify-content-between mb-3">-->
        <!--                            <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>-->
        <!--                            <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>-->
        <!--                            <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>-->
        <!--                        </div>-->
        <!--                        <a href="#" class="h4 d-inline-block mb-3">Which allows you to pay down insurance bills</a>-->
        <!--                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>-->
        <!--                        <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">-->
        <!--                <div class="blog-item">-->
        <!--                    <div class="blog-img">-->
        <!--                        <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="blog-categiry py-2 px-4">-->
        <!--                            <span>Business</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="blog-content p-4">-->
        <!--                        <div class="blog-comment d-flex justify-content-between mb-3">-->
        <!--                            <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>-->
        <!--                            <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>-->
        <!--                            <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>-->
        <!--                        </div>-->
        <!--                        <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>-->
        <!--                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>-->
        <!--                        <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">-->
        <!--                <div class="blog-item">-->
        <!--                    <div class="blog-img">-->
        <!--                        <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="blog-categiry py-2 px-4">-->
        <!--                            <span>Business</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="blog-content p-4">-->
        <!--                        <div class="blog-comment d-flex justify-content-between mb-3">-->
        <!--                            <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>-->
        <!--                            <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>-->
        <!--                            <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>-->
        <!--                        </div>-->
        <!--                        <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>-->
        <!--                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>-->
        <!--                        <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Blog End -->

        <!-- Team Start -->
        <!--<div class="container-fluid team pb-5">-->
        <!--    <div class="container pb-5">-->
        <!--        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">-->
        <!--            <h4 class="text-primary">Our Team</h4>-->
        <!--            <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>-->
        <!--            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
        <!--            </p>-->
        <!--        </div>-->
        <!--        <div class="row g-4">-->
        <!--            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">-->
        <!--                <div class="team-item">-->
        <!--                    <div class="team-img">-->
        <!--                        <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="team-icon">-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="team-title p-4">-->
        <!--                        <h4 class="mb-0">David James</h4>-->
        <!--                        <p class="mb-0">Profession</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">-->
        <!--                <div class="team-item">-->
        <!--                    <div class="team-img">-->
        <!--                        <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="team-icon">-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="team-title p-4">-->
        <!--                        <h4 class="mb-0">David James</h4>-->
        <!--                        <p class="mb-0">Profession</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">-->
        <!--                <div class="team-item">-->
        <!--                    <div class="team-img">-->
        <!--                        <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="team-icon">-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="team-title p-4">-->
        <!--                        <h4 class="mb-0">David James</h4>-->
        <!--                        <p class="mb-0">Profession</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">-->
        <!--                <div class="team-item">-->
        <!--                    <div class="team-img">-->
        <!--                        <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">-->
        <!--                        <div class="team-icon">-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>-->
        <!--                            <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="team-title p-4">-->
        <!--                        <h4 class="mb-0">David James</h4>-->
        <!--                        <p class="mb-0">Profession</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="text-primary">What Our Customers Are Saying</h1>
                    <!--<h4 class="display-4 mb-4">What Our Customers Are Saying</h4>-->
                    <!--<p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{ asset('img/testimonial-1.jpg') }}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Mostafa M.</h4>
                                    <p class="mb-3">ed, Egypt</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0">professional, fast and he can do what we agreed in time and low cost.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{ asset('img/testimonial-2.jpg') }}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Ailson S.</h4>
                                    <p class="mb-3">niteroi, Brazil</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0">This was my first contract with SkillFull Solution. SkillsFull is an excellent freelancer, very flexible..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{ asset('img/testimonial-3.jpg') }}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Jacob A.</h4>
                                    <p class="mb-3">Duncan, Canada
</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Always works within my budget. Works hard and well to deliver quality service.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection

<!-- @push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush -->

<!-- @push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush -->
