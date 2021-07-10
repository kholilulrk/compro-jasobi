<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.guest.meta')
    @include('components.guest.css')
</head>

<body>
    <div class="wrapper">
        <div id="pre-loader">
      <img src="{{asset('assets/images/pre-loader/loader-03.svg')}}" alt="">
        </div>

        <section id="login" class="login-box-main height-100vh page-section-ptb"
            style="background: url({{asset('assets/images/login/06.jpg')}});">
            <div class="login-box-main-middle">
                <div class="container">
                    <div class="row justify-content-center no-gutter">
                        <div class="col-lg-2 col-md-4">
                            <div class="login-box-left  white-bg">
                                <img class="logo-small" src="{{asset('assets/images/logo-icon-dark.png')}}" alt="">
                                <ul class="nav">
                                    <li class="active"><a href="#"> <i class="ti-user"></i> Login</a></li>
                                    <li><a href=" {{ route('regis') }} "> <i class="ti-pencil-alt"></i> Signup</a></li>
                                </ul>
                                <div class="social-icons color-hover clearfix pos-bot pb-30 pl-30">
                                    <ul>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 theme-bg">
                            <div class="login-box pos-r text-white login-box-theme">
                                <h2 class="text-white mb-20">Welcome to webster</h2>
                                <p class="mb-10 text-white">Create tailor-cut websites </p>
                                <p class="text-white">The exclusive multi-purpose responsive template.</p>
                                <a href=" {{ route('dashboard') }} ">
                                    <button type="button" class="button">
                                        <i class="fa fa-arrow-left"></i>
                                        <span>Back</span>
                                    </button>
                                </a>
                                <ul class="list-unstyled pos-bot pb-40">
                                    <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
                                    <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="login-box pb-50 clearfix white-bg">
                                <h3 class="mb-30">Login</h3>
                                <form action=" {{ route('attempt') }} " method="POST">
                                    @csrf
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Username* </label>
                                        <input id="name" class="web form-control" type="text" placeholder="Username"
                                            name="username">
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="Password">Password* </label>
                                        <input id="Password" class="Password form-control" type="password"
                                            placeholder="Password" name="password">
                                    </div>
                                    <div class="section-field">
                                        <div class="remember-checkbox mb-30">
                                            <input type="checkbox" class="form-control" name="two" id="two" />
                                            <label for="two"> Remember me</label>
                                            <a href="password-recovery.html" class="float-right">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="button">
                                        <span>Log in</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    @include('components.guest.js')

</body>

</html>
