<!-- <section id="emegenery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
      </div>
    </div>
  </div>
</section> -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('frontend/js/jquery-3.4.0.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" s rc="{{asset('frontend/js/mdb.js')}}"></script>

  <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/modules/wow.js')}}"></script>
  <!-- magnific-popup JS -->
    <script src="{{asset('frontend/js/magnific-popup/jquery.magnific-popup-min.js')}}"></script>
    <script src="{{asset('frontend/js/coustom.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>

 

  <!-- Initialize Swiper -->
    <script>
    $('.carousel.carousel-multi-item .carousel-item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i=0;i<1;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
      }
    });

//customers-testimonials
    (function($) {
  "user strict";

    $("#customers-testimonials").owlCarousel({
        
        items:1,
        autoplay:true,
        smartSpeed:700,
        loop:true,
        autoplayHoverPause:true
        
    });

  })(jQuery);

   new WOW().init();

  
   
  </script>

</body>

</html>
