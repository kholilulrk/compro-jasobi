<section id="feature" class="dark-theme-bg page-section-ptb happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img class="d-xs-block d-lg-block d-none img-fluid" src="{{asset($about->showLogoFeature())}}" alt="">
            </div>
            <div class="col-lg-7 mt-60">
                <div class="section-title">
                    <h2 class="text-white title-effect">Features</h2>
                </div>
                <div class="tab">
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($data_fitur as $key => $fitur)
                        <div class="tab-pane fade {{ $key==0 ? 'show active' : '' }}" id="testi-0{{$fitur->id}}">
                            <span class="quoter-icon">“</span>
                            <p class="text-white"> {{  $fitur->description }} </p>
                            <a class="button icon-color" href=" {{route('featureinfo.show', $fitur->id)}} ">Read more <i
                                    class="fa fa-angle-right"></i></a>
                            <div class="testimonial-avatar">
                                <h3 class="text-white">{{  $fitur->title }} </h3>
                            </div>
                        </div>
                        @endforeach
                        <ul class="nav nav-tabs mt-60" id="myTab" role="tablist">
                            @foreach ($data_fitur as $key => $fitur)
                            <li><a class="nav-item {{ $key==0 ? 'active' : '' }}" href="#testi-0{{$fitur->id}}"
                                    data-toggle="tab">
                                    <img class="img-fluid" src="{{ asset($fitur->showImage()) }}" alt=""> </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
