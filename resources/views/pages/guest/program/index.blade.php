@extends('layouts.guest.master-guest')

@section('content')

<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
style="background-image: url({{ asset('assets/images/bg/02.jpg') }});">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-title-name">
        <h1>Program</h1>
        <p>We know the secret of your success</p>
      </div>
      <ul class="page-breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="">Program</a></li>
      </ul>
    </div>
  </div>
</div>
</section>

<!--=================================
page-title -->


<!--=================================
blog timeline-->

<section class="white-bg blog page-section-ptb">
<div class="container">
  <div class="row">
    <div class="container">
      <ul class="timeline">
        <li class="entry-date"> <span> October 2017 </span></li>
        <li>
          <div class="timeline-badge primary"><a href="#">22 <span>Oct</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="entry-image clearfix">
                <img class="img-fluid" src="{{ asset('assets/images/blog/01.jpg') }}" alt="">
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost With Image</a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi
                    nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.</p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a href="#">29 <span>Sep</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="entry-image clearfix">
                <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1" data-md-items="1"
                  data-sm-items="1" data-xs-items="1" data-xx-items="1">
                  <div class="item">
                    <img class="img-fluid" src="{{ asset('assets/images/blog/02.jpg') }}" alt="">
                  </div>
                  <div class="item">
                    <img class="img-fluid" src="{{ asset('assets/images/blog/03.jpg') }}" alt="">
                  </div>
                  <div class="item">
                    <img class="img-fluid" src="{{ asset('assets/images/blog/04.jpg') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost With slider</a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic
                    perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis
                    nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur assumenda.</p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li>
          <div class="timeline-badge primary"><a href="#">30 <span>Aug</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="blog-entry-html-video clearfix">
                <video style="width:100%;height:100%;" id="player1" poster="{{ asset('assets/video/video.jpg') }}" controls
                  preload="none">
                  <source type="video/mp4" src="{{ asset('assets/video/video.mp4') }}" />
                  <source type="video/webm" src="{{ asset('assets/video/video.webm') }}" />
                  <source type="video/ogg" src="{{ asset('assets/video/video.ogv') }}" />
                </video>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost with Self Hosted Video (HTML5 Video)</a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea
                    maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis.</p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a href="#">14 <span>Jul</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="blog-entry-audio audio-video">
                <audio id="player2" src="{{ asset('assets/video/audio.mp3') }}"> </audio>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost with Audio</a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi
                    nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. </p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>


        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a href="#">15 <span>Jun</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="entry-soundcloud">
                <iframe style="height: 300px; width: 100%;"
                  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost Audio Soundcloud</a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum
                    ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit
                    Quae.</p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- =========================================== -->
        <li>
          <div class="timeline-badge primary"><a href="#">01 <span>May</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="clearfix">
                <ul class="grid-post">
                  <li>
                    <div class="portfolio-item">
                      <img class="img-fluid" src="{{ asset('assets/images/blog/05.jpg') }}" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="portfolio-item">
                      <img class="img-fluid" src="{{ asset('assets/images/blog/06.jpg') }}" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="portfolio-item">
                      <img class="img-fluid" src="{{ asset('assets/images/blog/07.jpg') }}" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="portfolio-item">
                      <img class="img-fluid" src="{{ asset('assets/images/blog/08.jpg') }}" alt="">
                    </div>
                  </li>
                </ul>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost With Image Grid Gallery Format </a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea
                    maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis,
                  </p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a href="#">23 <span>Apr</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="blog-entry-you-tube">
                <div class="js-video [youtube, widescreen]">
                  <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost with Youtube Video </a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis
                    nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident
                    lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt.</p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li>
          <div class="timeline-badge primary"><a href="#">06 <span>Mar</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="blog-entry-vimeo">
                <div class="js-video [vimeo, widescreen]">
                  <iframe src="https://player.vimeo.com/video/176916362"></iframe>
                </div>
              </div>
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost with vimeo Video </a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis,
                    asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea
                    maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                  </p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a href="#">22 <span>Feb</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry blockquote">
              <div class="entry-blockquote clearfix">
                <blockquote class="mt-60 blockquote">
                  The trouble with programmers is that you can never tell what a programmer is doing until it's
                  too late. The future belongs to a different kind of person with a different kind of mind:
                  artists, inventors, storytellers-creative and holistic ‘right-brain’ thinkers whose abilities
                  mark the fault line between who gets ahead and who doesn’t.
                  <cite class="text-white"> – Daniel Pink</cite>
                </blockquote>
              </div>
              <div class="blog-detail mt-30">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost With blockquote </a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-share mt-20 clearfix">
                  <div class="entry-button">
                    <a class="button arrow white" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong class="text-white">Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li>
          <div class="timeline-badge primary"><a href="#">21 <span>Jun</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
              <div class="blog-detail">
                <div class="entry-title mb-10">
                  <a href="#">Blogpost Without Image</a>
                </div>
                <div class="entry-meta mb-10">
                  <ul>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p>Provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic
                    perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis
                    nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua Consectetur, assumenda.</p>
                </div>
                <div class="entry-share clearfix">
                  <div class="entry-button">
                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                        aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none float-right">
                    <strong>Share : </strong>
                    <ul>
                      <li>
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                      </li>
                      <li>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- =========================================== -->
        <li class="entry-date-bottom"> <a href="#">Load more...</a></li>
        <!-- =========================================== -->
        <li class="clearfix" style="float: none;"></li>
      </ul>
    </div>
  </div>
</div>
</section>

<!--=================================
blog timeline-->


<!--=================================
action box- -->

<section class="action-box theme-bg full-width">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="action-box-text">
        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful
          features.</p>
      </div>
      <div class="action-box-button">
        <a class="button button-border white" href="#">
          <span>Purchase Now</span>
          <i class="fa fa-download"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</section>

<!--=================================
action box- -->

@stop