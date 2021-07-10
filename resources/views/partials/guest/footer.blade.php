
            <footer class="footer page-section-pt black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">About Us</h6>
                            <img src=" {{ asset($about->showLogo()) }} " alt=""
                                class="img-fluid img-footer">
                            <p class="mt-3"> {{ $about->short_description }} </p>
                        </div>
                        <div class="col-lg-2 col-sm-6 sm-mb-30">
                            <div class="footer-useful-link footer-hedding">
                                <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                                <ul>
                                    <li><a href="#homesection">Home</a></li>
                                    <li><a href="#whyus">Why Us</a></li>
                                    <li><a href="#aboutus">About Us</a></li>
                                    <li><a href="#feature">Features</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 sm-mb-30">
                            <div class="footer-useful-link footer-hedding">
                                <h6 class="text-white mb-30 mt-10 text-uppercase"></h6>
                                <ul>
                                    <li><a href="#visimisi">Visi & Misi</a></li>
                                    <li><a href="#cooperation">Cooperation</a></li>
                                    <li><a href="#raindrops">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 xs-mb-30">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                            <ul class="addresss-info">
                                <li><i class="fa fa-map-marker"></i>
                                    <p> {{ $contact->address }} </p>
                                </li>
                                <li><i class="fa fa-phone"></i> <a href="tel:{{ str_replace(' ', '', $contact->phone) }}"> <span> {{ $contact->phone }} </span>
                                    </a> </li>
                                <li><i class="fa fa-envelope-o"></i>Email: {{ $contact->email }} </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget mt-20">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <p class="mt-15"> ©Copyright 2019 <a href="javascript:void(0);"> {{ $about->title }} </a> | <a
                                href="#" target="_blank">Author: {{ $about->author }}</a></p>
                            </div>
                            <div class="col-lg-6 col-md-6 text-left text-md-right">
                                <div class="social-icons social-border color-hover clearfix">
                                    <ul>
                                        @foreach($sosmed as $social_media)
                                            {{-- <li><a href="{{ $social_media->url }}" target="_blank"><i class="fa fa-{{ $social_media->type }}"></i></a></li> --}}
                                            <li class="social-{{ $social_media->type }}"><a href="{{ $social_media->url }}"><i class="fa fa-{{ $social_media->type }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
