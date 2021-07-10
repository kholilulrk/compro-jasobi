@extends('layouts.guest.master-guest')

@section('content')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url({{ asset('assets/images/bg/02.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>About Me</h1>
                    <p>We know the secret of your success</p>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a> <i
                            class="fa fa-angle-double-right"></i></li>
                    <li><span>About</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-section-ptb gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h6>Have a look at our Profile</h6>
                    <h2 class="title-effect">Kholilul</h2>
                    {{-- @if($setting->url)
                        <div class="row mt-5" style="background: white;">
                            <div class="col-lg-6 text-center">
                                <img class="img-fluid" src="" alt="" style="height: 200px; object-fit: contain;">
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-box blog-2 blog-border mx-auto">
                                    <div class="popup-video-image border-video popup-gallery">
                                        <img class="img-fluid" src="{{ asset($setting->showpreview()) }}" alt=""
                    style="height: 300px;">
                    @if($setting->type == 'video')
                    <a class="popup-youtube" href="{{ $setting->url }}"> <i class="fa fa-play"></i> </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @else --}}
    <div class="row" style="background-color: white">
        <img class="img-fluid mx-auto" src="#" alt="">
    </div>
    {{-- @endif --}}
    </div>
    </div>
    </div>
    <div class="row" style="background: white;">
        <div class="col-lg-12">
            <div class="item">
                <div class="testimonial bottom_pos light">
                    <h2 class="title-effect">KRK</h2>
                    <p class="text-justify">asdasdasd</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="our-activities page-section-ptb  bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url({{ asset('assets/images/bg/06.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center pt-30 pb-30">
                <h2 class="mb-20 text-white">Webster has powerful options & tools, unlimited designs, responsive
                    framework and amazing support.</h2>
                <span class="theme-color"> - MARTIN SMITH</span>
            </div>
        </div>
    </div>
</section>

<section class="white-bg page-section-ptb">
    <div class="container">

        <div class="col-md-12 text-center">
            <div class="section-title">
                <h6>Awards from this</h6>
                <h2 class="title-effect">Award winning team </h2>
            </div>
        </div>

        <div class="row mt-60  justify-content-center">

            <section class="mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 sm-mb-30">
                            <div class="card border-0 theme-bg o-hidden h-100">
                                <img class="img-fluid" src="{{ asset('assets/images/about/02.jpg') }}" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white">Kholilul Rohman Kurniawan</a></h4>
                                    <p class="mb-0 pb-0 text-white">Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 sm-mb-30">
                            <div class="card border-0 theme-bg o-hidden h-100">
                                <img class="img-fluid" src="{{ asset('assets/images/about/03.jpg') }}" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Supercharge your motivation</a></h4>
                                    <p class="mb-0 pb-0 text-white">We also know those epic stories, those modern-day.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 theme-bg o-hidden h-100">
                                <img class="img-fluid" src="{{ asset('assets/images/about/01.jpg') }}" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Helen keller a teller & a seller </a></h4>
                                    <p class="mb-0 pb-0 text-white">Let's make something great together</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card border-0 theme-bg o-hidden h-100">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/big/03.jpg') }}" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Seo Analysis & Design </a></h4>
                                    <p class="mb-0 pb-0 text-white">Save Yourself Time By Using Webster</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="white-bg page-section-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h6>Awards from this</h6>
                    <h2 class="title-effect">Award winning team </h2>
                </div>
                <div class="clients-list mt-50">
                    <div class="owl-carousel" data-nav-dots="false" data-items="6" data-md-items="6" data-sm-items="4"
                        data-xs-items="2" data-xx-items="2">
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/01.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/02.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/03.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/04.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/05.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/06.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/07.png') }}"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid mx-auto" src="{{ asset('assets/images/clients/awards/08.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
