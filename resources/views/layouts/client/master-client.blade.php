<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.client.meta')
    @include('components.client.css')

</head>
<body>
    <div class="wrapper">

        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-12.svg')}}" alt="">
        </div>
        <header id="header" class="header dark">
            <div class="menu">
                <nav id="menu" class="mega-menu">
                    @include('partials.client.navbar')
                </nav>
            </div>
        </header>

        @yield('content-client')
        @include('partials.client.footer')
    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    @include('components.client.js')
</body>
</html>
