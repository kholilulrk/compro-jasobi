@extends('layouts.guest.master-guest')

@section('content')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url(images/bg/02.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>About Me</h1>
                    <p>We know the secret of your success</p>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('aboutus.index') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#"><i class="fa fa-home"></i> Features</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>......</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-section-ptb gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 class="title-effect">Our Feature</h2>
                    <div class="divider-flower">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>
            {{-- @foreach($fitur as $key => $result) --}}
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="feature-text left-icon mb-40">
                    <div class="feature-icon">
                        {{-- <span class="ti-desktop theme-color" aria-hidden="true"></span> --}}
                        <img src="#" class="icon">
                    </div>
                    <div class="feature-info">
                        <h5>TATA</h5>
                        <p>aasdasdasdasd</p>
                        <a class="button icon-color" href="#">Read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
        <div class="row" style="background: white;">
        </div>
    </div>
</section>

@stop
