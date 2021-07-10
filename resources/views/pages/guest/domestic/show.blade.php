<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.guest.meta')
    <title>Domestic Partners</title>
    @include('components.guest.css')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-03.svg')}}" alt="">
        </div>

        <!--=================================
 preloader -->


        <!--=================================
 header -->

        <header id="header" class="header default">

            <!--=================================
 mega menu -->

            <div class="menu">
                <!-- menu start -->
                <nav id="menu" class="mega-menu">
                    <!-- menu list items container -->
                    <section class="menu-list-items">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <!-- menu logo -->
                                    <ul class="menu-logo">
                                        <li>
                                            <a href="{{route('dashboard')}}"><img id="logo_img"
                                                    src="{{ asset($about->showLogo()) }}" alt="logo">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- menu links -->
                                    <div class="menu-bar">
                                        <ul class="menu-links">

                                            <li><a href=" {{route('dashboard')}} ">Home</a></li>

                                            <li><a href="javascript:void(0)"> Domestic Partners</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </nav>
                <!-- menu end -->
            </div>
        </header>

        <!--=================================
 header -->


        <!--=================================
page-title-->

        <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
            style="background-image: url({{ asset($about->showLogoGrayscale()) }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-name">
                            <h1>Domestic Partners</h1>
                            <p>We know the secret of your success</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a> <i
                                    class="fa fa-angle-double-right"></i>
                            </li>
                            <li>Domestic Partners</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->


        <!--=================================
 About-->

        <section class="page-section-ptb dark-theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="js-video [youtube, widescreen]">
                            <iframe width="560" height="315" src="{{$domestics->showVideo()}}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        {{-- <div class="social-icons social-border color-hover float-left mt-10">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-6 sm-mt-30">
                        <div class="section-title mb-20">
                            {{-- <h6 class="text-white">Who we are and what we do </h6> --}}
                            {{-- <h2 class="text-white"> {{ $internationals->title }} </h2> --}}
                            <div class="clearfix">
                                <div class="title float-left mb-20">
                                    <h2 class="theme-color">{{ $domestics->title }}</h2>
                                    {{-- <span>Web design</span> --}}
                                    <p class="text-white"> {{ $domestics->short_description }} </p>
                                </div>
                                
                            </div>
                            <a class="button mt-20" href=" {{ $domestics->url_website }} ">Kunjungi Website Kami</a>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
 About-->

        <section class="page-section-ptb bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
            style="background-image:url({{ asset($domestics->showImage()) }}">
            <div class=" container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center pt-30 pb-30">
                        <h2 class="mb-20 text-white"> {{ $domestics->title }} Domestic Partners </h2>
                        <span class="theme-color">- {{ $domestics->title }} -</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="white-bg page-section-ptb ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h2 class="mb-30">Description</h2>
                            <p> {!! $domestics->description !!} </p>
                        </div>
                    </div>
                </div>
                <div class="divider pt-60"></div>
            </div>
        </section>

    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    {{-- ==========================CTA=============================== --}}
    <div class="d-xs-block d-md-none fixed-bottom">
        <div class="container">
            <div class="row cta justify-content-center">
                <div class="header">
                    Info lebih lanjut hubungi kami
                </div>
                <ul class="py-2">
                    <li>
                        <a href="https://wa.me/{{ str_replace(' ', '', str_replace('+', '', $contact->phone)) }}">
                            <i class="fa fa-whatsapp"></i>
                            <span>Whatsapp</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:{{ str_replace(' ', '', $contact->phone) }}">
                            <i class="fa fa-phone"></i>
                            <span>Phone</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- ==========================CTA=============================== --}}
    
    @include('components.guest.js')
    {{-- @include('partials.guest.footer') --}}
</body>

</html>
