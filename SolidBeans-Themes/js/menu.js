 
jQuery(document).ready(function(){

$( ".menuwrap_slideout li:last-child" ).hide( "fast", function() {
    // Use arguments.callee so we don't need a named function
    $( this ).prev().hide( "fast", arguments.callee );
    });
  
  
$( ".js-nav" ).mouseover(function() {
  $( ".menuwrap_slideout li:last-child" ).show( 200, function() {
    // Use arguments.callee so we don't need a named function
    $( this ).prev().show( 400, arguments.callee );
  });
});
     
$( ".navigation_wrap" ).mouseleave(function() {
  $( ".menuwrap_slideout li:last-child" ).hide( 200, function() {
    // Use arguments.callee so we don't need a named function
    $( this ).prev().hide( 400, arguments.callee );
    });
  });
});

    $('.open-overlay').click(function() {
       $('.open-overlay').css('pointer-events', 'none');
       var overlay_navigation = $('.overlay-navigation'),
         top_bar = $('.bar-top'),
         middle_bar = $('.bar-middle'),
         bottom_bar = $('.bar-bottom');

       overlay_navigation.toggleClass('overlay-active');
       if (overlay_navigation.hasClass('overlay-active')) {

         top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
         middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
         bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
         overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
         overlay_navigation.velocity('transition.slideLeftIn', {
           duration: 300,
           delay: 0,
           begin: function() {
             $('.col_nav_menu ul li').velocity('transition.perspectiveLeftIn', {
               stagger: 150,
               delay: 0,
               complete: function() {
                 $('.col_nav_menu ul li a').velocity({
                   opacity: [1, 0],
                 }, {
                   delay: 10,
                   duration: 140
                 });
                 $('.open-overlay').css('pointer-events', 'auto');
               }
             })
           }
         })

       } else {
         $('.open-overlay').css('pointer-events', 'none');
         top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
         middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
         bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
         overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
         $('.col_nav_menu ul li').velocity('transition.perspectiveRightOut', {
           stagger: 150,
           delay: 0,
           complete: function() {
             overlay_navigation.velocity('transition.fadeOut', {
               delay: 0,
               duration: 300,
               complete: function() {
                 $('.col_nav_menu ul li a').velocity({
                   opacity: [0, 1],
                 }, {
                   delay: 0,
                   duration: 50
                 });
                 $('.open-overlay').css('pointer-events', 'auto');
               }
             });
           }
         })
       }
     });
