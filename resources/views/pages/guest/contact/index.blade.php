<section id="raindrops" class="raindrops dark-theme-bg" style="height: 50px;"></section>
{{-- <section id="raindrops" class="raindrops" style="height: 50px;"></section> --}}

<section class="contact-box contact-box-top dark-theme-bg">
    <div class="container">
        <div class="row pt-20 pb-40">
            <div class="col-md-4 sm-mb-30">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-map text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white"> {{ $contact->address }} </h5>
                        {{-- <span class="text-white">Kec. Genteng, Kota SBY, Jawa Timur 60271, Indonesia</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 sm-mb-30">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-headphone text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white">{{ $contact->phone }}</h5>
                        <span class="text-white">Mon-Fri 8:30am-6:30pm</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="ti-email text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white">{{ $contact->email }}</h5>
                        <span class="text-white">24 X 7 online support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-us" class="dark-theme-bg page-section-ptb bg-overlay-black-70" data-jarallax='{"speed": 0.6}'
style="background-image: url({{asset('assets/demo-one-page/personal-dark/images/04.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sm-mb-40">
                <div class="contact-3-info">
                    <div class="clearfix">
                        <div class="section-title text-left">
                            <!-- <h6>If you got any questions </h6> -->
                            <h2 class="title-effect text-white">Contact Us</h2>
                        </div>
                        <form role="form" method="post" action="{{ route('contact_guest.store') }}">
                            {{ csrf_field() }}
                            @if (Session::has('status'))
                                <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
                            @endif
                            @if ($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="contact-form clearfix">
                                <div class="section-field">
                                    <input id="name" type="text" placeholder="Name*" class="form-control"  name="name" value="{{ old('name') }}">
                                </div>
                                <div class="section-field">
                                    <input type="email" placeholder="Email*" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="section-field">
                                    <input type="text" placeholder="Phone*" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>
                                <div class="section-field textarea">
                                    <textarea class="input-message form-control" placeholder="Comment*"  rows="7" name="message">{{ old('message') }}</textarea>
                                </div>
                                <!-- Google reCaptch-->
                                <div class="g-recaptcha section-field clearfix" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                <input type="hidden" name="action" value="sendEmail" />
                                <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send
                                        message </span> <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--=================================
   contact-->
