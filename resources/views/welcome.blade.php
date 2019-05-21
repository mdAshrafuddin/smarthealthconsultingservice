@extends('layouts.frontend.frontend_master')


@section('content')


  <!-- section silder -->

  <section class="container-slider animated animated fadeIn">
    <div class="container-fluid no-padding">
      <div class="row">
        <div class="col-md-12">
          <!--Carousel Wrapper-->
              <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-2" data-slide-to="1"></li>
                  <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="view">
                      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                        alt="First slide">
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption carousel-caption-change">
                      <h3 class="h3-responsive change-carousel animated zoomIn">Everyone Deserve the best</h3>
                      <p class="change-carousel-p animated zoomIn">First text</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                        alt="Second slide">
                      <div class="mask rgba-black-strong"></div>
                    </div>


                  <div class="carousel-caption carousel-caption-change">
                      <h3 class="h3-responsive change-carousel animated zoomIn">Everyone Deserve the best</h3>
                      <p class="change-carousel-p animated zoomIn">First text</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                        alt="Third slide">
                      <div class="mask rgba-black-slight"></div>
                    </div>
                   <div class="carousel-caption carousel-caption-change animated zoomIn">
                      <h3 class="h3-responsive change-carousel">Everyone Deserve the best</h3>
                      <p class="change-carousel-p animated zoomIn">First text</p>
                    </div>
                  </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
        </div>
      </div>
    </div>
  </section>

<!-- service emegenery -->
<section id="emegenery" class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title card-all-change"><i class="fas fa-phone-volume"></i></h5>
      <p class="card-text card-all-change">EMERgency cases</p>
      <p class="card-text card-all-change">01753511918</p>
      
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title card-all-change"><i class="fas fa-phone-volume"></i></h5>
      <p class="card-text card-all-change">24 Hour service</p>
      <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using </p>

      <button type="button" class="btn btn-outline-secondary waves-effect">Read More</button>
      
    </div>
  </div>
 
  <div class="card">
    <div class="card-body">
      <h5 class="card-title card-all-change"><i class="fas fa-phone-volume"></i></h5>
      <p class="card-text card-all-change">Working Hours</p>
      <p class="card-text">
        <table class="card-all-change">
            <tr><th>Sunday</th><td>Closed</td></tr>
            <tr><th>Monday</th><td>9am - 5pm</td></tr>
            <tr><th>Tuesday</th><td>9am - 5pm</td></tr>
            <tr><th>Wednesday</th><td>9am - 5pm</td></tr>
            <tr><th>Thursday</th><td>9am - 5pm</td></tr>
            </table>
      </p>
      
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section><!-- end of service emegenery -->




<!-- provide Service -->

<section id="emegenery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="service_provider wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
          <span><strong>Provided</strong> service</span>
          <p>It is a long established fact that a reader will be distracted by the readable content of a <br> page when looking at its layout. The point of using </p>
        </div>


        <!-- Start your project here-->
  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">
      <div class="col-md-4 col-sm-12">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
            alt="Card image cap">
          <div class="card-body card-change">
            <p class="card-text">Better Service At Low Cost</p>
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-md-4 col-sm-12">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
            alt="Card image cap">
          <div class="card-body card-change">
            <p class="card-text">Better Service At Low Cost</p>
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-md-4 col-sm-12">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
            alt="Card image cap">
          <div class="card-body card-change">
            <p class="card-text">Better Service At Low Cost</p>
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-md-4 col-sm-12">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg" alt="Card image cap">
          <div class="card-body card-change">
            <p class="card-text">Better Service At Low Cost</p>
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-md-4 col-sm-12">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg" alt="Card image cap">
          <div class="card-body card-change">
            <p class="card-text">Better Service At Low Cost</p>
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-md-4 col-sm-12">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg" alt="Card image cap">
          <div class="card-body card-change">
            <p class="card-text">Better Service At Low Cost</p>
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
 
      </div>
    </div>
  </div>
</section><!-- end of provide Service -->



<!-- Testimonials -->
            <section id="testimonials">
                     <div id="testimonials-cover" class="bg-parallax">
                         <div class="content-box">
                             <div class="content-title contant-title-white wow animated fadeInDown data-wow-duration=1s data-wow-delay=.5s">
                             <h3>What Our Customers Say</h3>
                             <div class="content-title-underline"></div>
                             </div>

                             <div class="container">
                            <div class="row wow animated fadeInDown data-wow-duration=1s data-wow-delay=.5s">
                                <div class="col-md-12">

                                    <div id="customers-testimonials" class="text-center owl-carousel owl-theme">

                                        <div class="testimonial">
                                            <img src="frontend/img/testimonial/2.jpg" class="img-responsive img-circle" alt="testimonal">

                                            <blockquote class="text-center">
                                                <p>Facere laboriosam recusandae inventore suscipit laudantium, dicta debitis et, quibusdam amet placeat consectetur! Necessitatibus ea repudiandae dolore, ab voluptatem voluptatum blanditiis delectus.</p>
                                            </blockquote>

                                            <div class="testimonial-author">
                                                <p>
                                                    <strong>Daniel Watrous</strong>
                                                    <span>CEO & Founder - Google</span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="testimonial">
                                            <img src="frontend/img/testimonial/3.jpg" class="img-responsive img-circle" alt="testimonal">

                                            <blockquote class="text-center">
     

    <p>Facere laboriosam recusandae inventore suscipit laudantium, dicta debitis et, quibusdam amet placeat consectetur! Necessitatibus ea repudiandae dolore, ab voluptatem voluptatum blanditiis delectus.</p>
                                            </blockquote>

                                            <div class="testimonial-author">
                                                <p>
                                                    <strong>Daniel Mathew</strong>
                                                    <span>CEO & Founder - Yahoo</span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="testimonial">
                                            <img src="frontend/img/testimonial/4.jpg" class="img-responsive img-circle" alt="testimonal">

                                            <blockquote class="text-center">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni nulla reiciendis aperiam maxime, reprehenderit at possimus, dolorem rem, facilis ut delectus asperiores aspernatur similique amet ad error eum. Amet, impedit!</p>
                                            </blockquote>

                                            <div class="testimonial-author">
                                                <p>
                                                    <strong>Sara Smith</strong>
                                                    <span>CEO & Founder - Amazon</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                             </div>
                         </div>
                     
                     </div>
                 </section><!-- end of Testimonials -->
@endsection