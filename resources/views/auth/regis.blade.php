<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.guest.meta')
    @include('components.guest.css')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-01.svg')}}" alt="">
        </div>

        <!--=================================
 preloader -->

        <!--=================================
 Signup-->

        <section class="login-box-main height-100vh page-section-ptb"
            style="background: url({{asset('assets/images/signup/06.jpg')}});">
            <div class="login-box-main-middle">
                <div class="container">
                    <div class="row justify-content-center no-gutter">
                        <div class="col-lg-2 col-md-4">
                            <div class="login-box-left  white-bg">
                                <img class="logo-small" src="{{asset('assets/images/logo-icon-dark.png')}}" alt="">
                                <ul class="nav">
                                    <li><a href=" {{ route('login') }} "> <i class="ti-user"></i> Login</a></li>
                                    <li class="active"><a href="#"> <i class="ti-pencil-alt"></i> Signup</a></li>
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
                            <form action=" {{ route('regis.store') }} " method="post">
                                @method('get')
                                @csrf
                                <div class="login-box pb-50 clearfix white-bg">
                                    <h3 class="mb-30">Signup</h3>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Name* </label>
                                        <input name="nama" type="text" placeholder="Name*" class="form-control" name="email" required>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Email* </label>
                                        <input name="email" type="email" placeholder="Email*" class="form-control" name="email" required>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Username* </label>
                                        <input name="username" type="text" placeholder="Username*" class="form-control" name="email" required>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="Password">Password* </label>
                                        <input name="password" id="Password" class="Password form-control" type="password"
                                            placeholder="Password" name="Password" required>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Phone Number* </label>
                                        <input name="telp" type="text" placeholder="Phone Number*" class="form-control"
                                            name="email" required>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Address* </label>
                                        <input name="alamat" type="text" placeholder="Address*" class="form-control" name="email" required>
                                    </div>
                                    <button type="submit" class="button">
                                        <span>Signup</span>
                                        <i class="fa fa-check"></i>
                                    </b>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
 signup-->


    </div>



    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!--=================================
 jquery -->


    @include('components.guest.js')
</body>

</html>
