(function($) {
  "use strict"; // Start of use strict


 /* --- --- scroll  --- --- */

  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });

 /* --- ---scroll ends--- --- */




})(jQuery); // End of use strict

