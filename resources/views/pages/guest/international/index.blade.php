
<section id="cooperation" class="dark-theme-bg our-service page-section-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <!-- <h6 class="text-white">Awards from this</h6> -->
                        <h2 class="text-white title-effect">International Partners </h2>
                    </div>
                    <div class="clients-list mt-50">
                        <div class="owl-carousel" data-nav-dots="false" data-items="6" data-md-items="6" data-sm-items="4"
                            data-xs-items="2" data-xx-items="2">
                            @foreach ($internationals as $international)
                            <div class="item">
                                <a href=" {{ route('international_guest.show', $international->id) }} ">
                                <img class="img-fluid mx-auto" src="{{ asset($international->showImage()) }}"
                                    alt="">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>