<section id="aboutus" class="dark-theme-bg page-section-ptb bg-overlay-black-70" data-jarallax='{"speed": 0.6}'
    style="background-image: url({{ asset($about->showImageTeam()) }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <!-- <h6 class="text-white">Because We are ultra creative agency </h6> -->
                    <h2 class="text-white title-effect dark">About Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="text-white lead text-justify-center"> {!!Str::limit( $about->description, 500)!!} </p>
                <div class="row mt-30">
                    <div class="col-sm-6 col-xs-6 col-xx-12">
                        <a class="button icon-color" href=" {{route('aboutus_guest.show', $about->id)}} ">Read more <i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sm-mt-30 ">
                <!-- <video class="rounded video" style="width: 100%;" poster="video/video.jpg" preload="auto"
                    controls="controls">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-bhK47eRLDY" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </video> -->
                <div class="js-video [youtube, widescreen]">
                    <iframe width="560" height="315" src="{{$about->showVideo()}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;"
        id="jarallax-container-1">
        <div
            style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;file:///E:/KP/main-files/Template/images/bg/06.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1519.2px; height: 791.25px; overflow: hidden; pointer-events: none; margin-left: 0px; margin-top: -126.625px; visibility: visible; transform: translateY(73.9583px) translateZ(0px);">
        </div>
    </div>
</section>
