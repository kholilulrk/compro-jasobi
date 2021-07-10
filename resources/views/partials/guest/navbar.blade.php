<header id="header" class="header default fullWidth">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-center text-md-left">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> {{ $contact->email }} </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:tel:{{ str_replace(' ', '', $contact->phone) }}">
                                    <span>{{ $contact->phone }}</span>
                                </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-center text-md-right social-icons color-icon">
                        <ul>
                            @foreach($sosmed as $social_media)
                            <li class="social-{{ $social_media->type }}"><a href="{{ $social_media->url }}"><i
                                        class="fa fa-{{ $social_media->type }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu" id="onepagenav">
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
                                    <a><img id="logo_img" class="img-fluid"
                                        onclick="redirectTo('{{route('dashboard')}}')"
                                            src="{{ asset($about->showLogo()) }}"
                                            alt=""> </a>
                                </li>
                            </ul>
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li><a href="#homesection">Home</a></li>
                                    <li><a href="#whyus">Why Us</a></li>
                                    <li><a href="#aboutus">About Us</a></li>
                                    <li><a href="#feature">Features</a></li>
                                    <li><a href="#visimisi">Visi & Misi</a></li>
                                    <li><a href="#cooperation">Cooperation</a></li>
                                    <li><a href="#raindrops">Contact Us</a></li>
                                    <!-- <li><a class="button move" href="#login "
                                            onclick="redirectTo('{{route('login')}}')">Login</a></li> -->
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
