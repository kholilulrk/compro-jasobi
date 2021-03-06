@extends('layouts.guest.master-guest')

@section('content')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
    style="background-image: url({{ asset('assets/images/bg/02.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Contact 01</h1>
                    <p>We know the secret of your success</p>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>Contact 01</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
  page-title -->


<!--=================================
   contact-->

<section class="contact white-bg page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h6>let's work together</h6>
                    <h2>Let’s Get In Touch!</h2>
                    <p>It would be great to hear from you! If you got any questions</p>
                </div>
            </div>
        </div>
        <div class="touch-in white-bg">
            <div class="row">
                <div class="col-lg-4 col-md-4 sm-mb-30">
                    <div class="contact-box text-center h-100">
                        <i class="ti-map-alt theme-color"></i>
                        <h5 class="uppercase mt-20">Address</h5>
                        <p class="mt-20">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 sm-mb-30">
                    <div class="contact-box text-center h-100">
                        <i class="ti-mobile theme-color"></i>
                        <h5 class="uppercase mt-20">Phone</h5>
                        <p class="mt-20"> +(704) 279-1249</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 sm-mb-30">
                    <div class="contact-box text-center h-100">
                        <i class="ti-email theme-color"></i>
                        <h5 class="uppercase mt-20">Email</h5>
                        <p class="mt-20">letstalk@webster.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="mt-50 mb-30">It would be great to hear from you! If you got any questions, please do not
                    hesitate to send us a message. We are looking forward to hearing from you! We reply within <span
                        class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip"
                        data-placement="top"> 24 hours!</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="formmessage">Success/Error Message Goes Here</div>
                <form id="contactform" role="form" method="post" action="php/contact-form.php">
                    <div class="contact-form clearfix">
                        <div class="section-field">
                            <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                        </div>
                        <div class="section-field">
                            <input type="email" placeholder="Email*" class="form-control" name="email">
                        </div>
                        <div class="section-field">
                            <input type="text" placeholder="Phone*" class="form-control" name="phone">
                        </div>
                        <div class="section-field textarea">
                            <textarea class="form-control input-message" placeholder="Comment*" rows="7"
                                name="message"></textarea>
                        </div>
                        <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
                        <div class="section-field submit-button">
                            <input type="hidden" name="action" value="sendEmail" />
                            <button id="submit" name="submit" type="submit" value="Send" class="button"> Send your
                                message </button>
                        </div>
                    </div>
                </form>
                <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block"
                        src="images/pre-loader/loader-02.svg" alt=""></div>
            </div>
        </div>
    </div>
</section>

<!--=================================
   contact-->


<!--=================================
   contact map -->

<section class="contact-map clearfix o-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div style="width: 100%; height: 350px;" id="map" class="g-map" data-type='black'></div>
            </div>
        </div>
    </div>
</section>

<!--=================================
   contact map -->

@stop