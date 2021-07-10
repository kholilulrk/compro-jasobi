
<section id="whyus" class="dark-theme-bg key-features white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <!-- <h6 class="text-white">Check out best of</h6> -->
                    <h2 class="text-white title-effect">Why Us</h2>
                </div>
            </div>
        </div>
        {{-- <div class="row"> --}}
        <div class="row justify-content-center">
            @foreach ($why_us as $whyus)
            <div class="col-lg-3 col-md-3 p-2 active">
                <div class="feature-text rounded text-center p-3 whyus">
                    <!-- <div class="feature-icon">
                        <img src="{{ asset($whyus->showImage()) }}" class="icon rounded">
                    </div> -->
                    <div class="feature-info">
                        <h4 class="text-white pb-10"> {{ $whyus->title }} </h4>
                        <!-- <p class=""> {!! $whyus->description !!} </p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Why Us -->
