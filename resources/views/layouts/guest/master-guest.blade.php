<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.guest.meta')
    <title>JaSoBi</title>
    @include('components.guest.css')
    <!-- Google recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <audio src=" {{asset('assets/audio/play-for-me-jasobi_02.mp3')}} " autoplay="autoplay" hidden="hidden"></audio>
    <div class="wrapper">

        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-03.svg')}}" alt="">
        </div>
        <section id="homesection"></section>
        @include('partials.guest.navbar')
        @yield('content')
        @include('partials.guest.footer')
        @include('partials.guest.cta')
    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
    <!--=================================
 jquery -->
    @include('components.guest.js')
</body>

</html>
