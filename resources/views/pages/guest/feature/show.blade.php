<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.guest.meta')
    <title>Features</title>
    @include('components.guest.css')
</head>

<body>
            
    <div class="wrapper">
        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-03.svg')}}" alt="">
        </div>

        <header id="header" class="header dark">
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
                                            <a href="{{route('dashboard')}}"><img id="logo_img" src="{{ asset($about->showLogo()) }}" alt="logo">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- menu links -->
                                    <div class="menu-bar">
                                        <ul class="menu-links">

                                            <li><a href=" {{route('dashboard')}} ">Home</a>

                                            </li>

                                            <li><a href="javascript:void(0)">Feature {{$featureinfo->title}}</a>
                                            </li>
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
page-title-->

        <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
            style="background-image: url({{ asset($about->showLogoGrayscale()) }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-name">
                            <h1>Feature {{$featureinfo->title}}</h1>
                            <p>We know the secret of your success</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a> <i
                                    class="fa fa-angle-double-right"></i>
                            </li>
                            <li>Feature {{$featureinfo->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->

        <section class="dark-theme-bg page-section-ptb bg-overlay-black-70" data-jarallax='{"speed": 0.6}'
            style="background-image: url({{asset('assets/demo-one-page/personal-dark/images/04.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="rounded js-video [youtube, widescreen]">
                            <iframe class="rounded" src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-mt-30">
                        <div class="section-title mb-20">
                            <h6 class="text-white">Who we are and what we do </h6>
                            <h2 class="text-white title-effect"> {{$featureinfo->title}} </h2>
                            <p class="text-white"> {{$featureinfo->description}} </p>
                        </div>
                        <!-- <p>Webster is an exclusive multi-purpose 100% responsive template with powerful features. Simple
                            and well-structured coding, high quality and flexible layout, scalable features along with
                            color schemes to create tailor-cut websites. </p> -->

                        <a class="button mt-20" href="#"> Read more</a>
                    </div>
                </div>
            </div>
        </section>

        @include('components.guest.js')
        {{-- @include('partials.guest.footer') --}}
</body>

</html>
