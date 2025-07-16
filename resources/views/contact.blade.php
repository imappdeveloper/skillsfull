@extends('layouts.app')

@section('title','Contact')


@section('content');
<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <!--<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">-->
                <!--    <h4 class="text-primary">Contact Us</h4>-->
                <!--    <h1 class="display-4 mb-4">If you have any comments please apply now</h1>-->
                <!--</div>-->
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="contact-img d-flex justify-content-center" >
                            <div class="contact-img-inner">
                                <img src="{{ asset('img/contact.png') }}" class="img-fluid w-100"  alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div>
                            <h4 class="text-primary">Send Your Message</h4>
                            @if(session('success'))
   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
@endif
                            <!--<p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>-->
                            <form action="{{ route('enquiry.store') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="text" name="name" class="form-control border-0" id="name" placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="email" name="email" class="form-control border-0" id="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="text" name="contact" class="form-control border-0" id="phone" placeholder="Phone">
                <label for="phone">Your Phone</label>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="text" name="type" class="form-control border-0" id="project" placeholder="Project">
                <label for="project">Your Project</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" name="subject" class="form-control border-0" id="subject" placeholder="Subject">
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea name="message" class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
        </div>
    </div>
</form>

                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Address</h4>
                                            <p class="mb-0">{{$setting->website_address}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">{{$setting->website_email}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">{{$setting->website_number}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fab fa-firefox-browser fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>skillsfull.com</h4>
                                            <p class="mb-0">{{$setting->website_number}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rounded">
                            <iframe class="rounded w-100"
                            style="height: 400px;" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=12%20bigha,%20shikander%20kampoo+(Skillsfull%20solution)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection
