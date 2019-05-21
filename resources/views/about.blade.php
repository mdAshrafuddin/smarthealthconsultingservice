@extends('layouts.frontend.frontend_master')


@section('content')
<section id="emegenery">
      <div class="container">
     
            <!--Section: Main features & Quick Start-->
     <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4 img-change">

            <img src="{{asset('frontend/img/about/about.jpg')}}" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3 h3-change ">Our Story</h3>
            <p class="p-change">&ldquo; It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. &ldquo;</p>
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>
            <!-- Main heading -->
            <hr>

            <!-- Main heading -->
            <h3 class="h3 mb-3 h3-change ">Mission</h3>
           
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>
            <!-- Main heading -->
            <hr>

            <!-- Main heading -->
            <h3 class="h3 mb-3 h3-change ">Vision</h3>
          
            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>
            <!-- Main heading -->
            <hr>
        </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>

        </div>
      </div>
    </section>



<section id="emegenery" class="background-rgba">
        
        <div class="service_provider wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
          <span><strong>About</strong> Our Hospital</span>
          <p>Onslow Memorial Hospital is a 162-bed facility founded in 1944 and <br>located in coastal North Carolina. With the exception of Brynn Marr Psychiatric Hospital  </p>
        </div>


    <div class="container-fluid">
      <div class="row">
        <!--Carousel Wrapper-->
          <div id="video-carousel-example2" class="carousel slide carousel-fade coursel-top" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
             
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!-- First slide -->
              <div class="carousel-item active">
                <!--Mask color-->
                <div class="view view-change">
                  <!--Video source-->
                  <video class="video-fluid" autoplay loop muted>
                    <source src="{{asset('frontend/img/about/aboutHospital.mp4')}}" type="video/mp4" />
                  </video>
                  <div class="mask rgba-indigo-light"></div>
                </div>

             
              </div>
              <!-- /.First slide -->
              </div>
              <!-- /.Third slide -->
            </div>
            <!--/.Slides-->
            
            <!--/.Controls-->
          </div>
          <!--Carousel Wrapper-->
      </div>
  
</section>

<!-- Work -->
    <section id="work">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="service_provider wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
          <span><strong>Collected shots</strong> of Our Hospital</span>
          <p>Onslow Memorial Hospital is a 162-bed facility founded <br>in 1944 and located in  coastal North Carolina.</p>
        </div>
                
                <div class="content-title-underline"></div>
            </div>

            <div class="container-fluid container-full-work ">

                <div class="row no-gutters wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/1.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/1.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/2.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/2.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/3.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/3.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/4.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/4.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/5.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/5.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/6.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/6.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/7.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/7.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="img-wrapper">
                            <a href="{{ asset('frontend/img/about/8.jpg')}}" title="Work Description Goes Here">
                                <img src="{{ asset('frontend/img/about/8.jpg')}}" class="img-responsive" alt="Work">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Content Box -->
    </section>
@endsection