@extends('layouts.frontend.frontend_master')


@section('content')
<div id="emegenery">
  <div class="container">

    	<!-- Section: Contact v.3 -->
<section class="contact-section my-5">

  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">Your name</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">Your email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">Your phone</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">Your company</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-8">
              <div class="md-form mb-0">
                <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Your message</label>
                <a class="btn-floating btn-lg blue">
                  <i class="far fa-paper-plane"></i>
                </a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i>Sylhet, 94126, USA</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->    

    </div>
  </div>


  <!-- Google map -->

  <div id="emegenery">
  	<div class="container-fulid">
  		
  			<!-- Section: Contact v.1 -->
<section class="my-5">
<!-- Grid row -->
  <div class="row">
	<!-- Grid column -->
    <div class="col-lg-12">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>New York, 94126</p>
          <p class="mb-md-0">United States</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>+ 01 234 567 89</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>info@gmail.com</p>
          <p class="mb-0">sale@gmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
  		
  	</div>
  </div>
@endsection