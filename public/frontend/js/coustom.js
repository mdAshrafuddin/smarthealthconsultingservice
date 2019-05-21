/*====================================
                    Work
======================================*/
 (function($) {
  "user strict";

    $('#work').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
     gallery:{
      enabled:true
    }
    // other options
  });

  })(jQuery);

   $(document).ready(function(){
          $("#dat").datepicker();
    })
