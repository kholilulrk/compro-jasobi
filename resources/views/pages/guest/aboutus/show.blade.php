<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.guest.meta')
    <title>About Us</title>
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

                                            <li><a href="#"> About Us</a></li>
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
                            <h1>About Us</h1>
                            <p>about Our Achievements</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a> <i
                                    class="fa fa-angle-double-right"></i>
                            </li>
                            <li>About Us</li>
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
                            <iframe class="rounded" src=" https://www.youtube.com/embed/nrJtHemSPW4?rel=0 " allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-mt-30">
                        <div class="section-title mb-20">
                            <h6 class="text-white">Who we are and what we do </h6>
                            <h2 class="text-white">Get to know us better. </h2>
                            <!-- <p class="text-white">We truly care about our users and our product. We are dedicated to
                                providing you with the
                                best
                                experience possible.</p> -->
                        </div>
                        <p class="text-gray text-justify"> {!!$about->description!!} </p>

                        <!-- <a class="button mt-20" href="#"> Read more</a> -->
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
 About-->

        <!-- <section class="page-section-ptb bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
            style="background-image:url({{asset('assets/demo-one-page/personal-dark/images/05.jpg')}}">
            <div class=" container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center pt-30 pb-30">
                        <h2 class="mb-20 text-white">Webster has powerful options & tools, unlimited designs, responsive
                            framework and amazing support.</h2>
                        <span class="theme-color"> - MARTIN SMITH</span>
                    </div>
                </div>
            </div>
        </section> -->

        
        <!-- ======================Team  -->

        <section class="page-section-ptb bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
            style="background-image: url({{ asset($about->showImageTeam()) }});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h6 class="text-white">Meet our Superheros </h6>
                            <h2 class="text-white title-effect">Our creative team</h2>
                            {{-- <p class="text-white">Take your project to a new level with the Webster.</p> --}}
                        </div>
                    </div>
                </div>

                <div class="team-3 ">
                    <div class="row justify-content-center">
                        @foreach($data_team as $team )
                        <div class="col-lg-3 col-sm-6 sm-mb-30 mb-4">
                            <div class="team team-round full-border">
                                <div class="team-photo">
                                    <img class="img-fluid mx-auto" src="{{asset($team->showImage())}}" alt="">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <h5 class="text-white">{{$team->nama_lengkap}}</h5>
                                        <span class="text-white">{{$team->profesi}}</span>
                                    </div>
                                    <div class="team-contact">
                                        <span class="call text-white"> {{$team->no_telp}}</span>
                                        <span class="email"> <i class="fa fa-envelope-o"></i></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
                            <!-- Team ======================== -->
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
