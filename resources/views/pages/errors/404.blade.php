<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Webster - Responsive Multi-purpose HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- font -->
    <link rel="stylesheet"
        href="{{ asset('assets/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900') }}">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins-css.css') }}" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <!-- error -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/demo-specialty-pages/error-06/css/error-06.css') }}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

</head>

<body>

    <div class="wrapper">

        <div class="height-100vh parallax" style="background-image: url({{ asset('assets/demo-specialty-pages/error-06/images/01.jpg') }});">

            <!--=================================
 preloader -->

            <div id="pre-loader">
                <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
            </div>

            <!--=================================
 preloader -->


            <!--=================================
 error -->

            <div class="error-06 error-middle page-section-ptb">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h1 class="text-white">404</h1>
                            <h2 class="text-white">Page not found!</h2>
                            <p class="text-white"> Don't worry, sometimes it happens even for the best of us :)</p>
                            <div class="widget-search mt-30">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control" placeholder="Search....">
                            </div>
                            <a class="button white button-border mt-30" href="{{ route('dashboard') }}">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
 error -->

    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!--=================================
 jquery -->

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- plugins-jquery -->
    <script src="{{ asset('assets/js/plugins-jquery.js') }}"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';

    </script>

    <!-- custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>



</body>

</html>
