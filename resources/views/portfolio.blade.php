@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Protfolio</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Protfolio</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="text-primary">Our Protfolio</h1>
                    <!--<h1 class="display-4 mb-4">We Provide Best Services</h1>-->
                    <!--<p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.-->
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/multitrack.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">MultiTrack</a>
                                    <p class="mb-4">Multitrack is software platform to track all kind of GPS devices.It is GPS device independent platform so you can track any kind of GPS on this application.</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/truckbooking.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">
                                        Truck Booking App</a>
                                    <p class="mb-4">Loader can use this app to transport their consignment. Our app provides a seamless experience for booking trucks with multiple transporters available at competitive prices.</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/morning.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Morning Fresh</a>
                                    <p class="mb-4">Welcome to Morning Fresh, your one-stop destination for fresh and quality groceries and vegetables.We are  providing our community with a wide variety of fresh produce</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/vyarufood.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Tiffin delivery App</a>
                                    <p class="mb-4">We specialize in providing a variety of meals, including homemade tiffin service in Gwalior with both vegetarian and non-vegetarian options.</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">-->
                    <!--    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>-->
                    <!--</div>-->
                </div>
                <br>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/pharmadguru.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">PharmD Guru</a>
                                    <p class="mb-4">PharmD Guru is an educational application designed for Pharm.D students, providing structured study materials, notes.</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/sambha-music.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">
                                        Samba Music</a>
                                    <p class="mb-4">With a friendly interface very easy to use and listen to your Samba Music, to have access you only need to be connected to the internet or Wifi.</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/nursingpoint.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Nursing Point</a>
                                    <p class="mb-4">Nussing point is online learning app for nursing student .where they can give quiz Qustion and answer ,exam notes,study materials</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/gkcterminal.PNG') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">GKJ Terminal</a>
                                    <p class="mb-4">GKC terminal for android and windows developed by GKC team.
This terminal supports Bluetooth, WIFI and USB communication..</p>
                                    <!--<a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">-->
                    <!--    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>-->
                    <!--</div>-->
                </div>
                
                
            </div>
        </div>

@endsection