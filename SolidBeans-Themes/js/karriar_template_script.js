
jQuery(document).ready(function(){
  //first modal
  $("a#modBtn1").click(function(){
    $(".content1").addClass("active");
    $(".modal-content-inner").addClass("modal-content-inner-active");
   });
  //remove class
   $(".close-animatedModal").click(function(){
      $(".content1").removeClass("active");
    }); 

  //2nd modal
  $("a#modBtn2").click(function(){
    $(".content2").addClass("active");
    $(".modal-content-inner").addClass("modal-content-inner-active");
   });
  //remove class
   $(".close-animatedModal").click(function(){
      $(".content2").removeClass("active");
    }); 

  //3rd modal
  $("a#modBtn3").click(function(){
    $(".content3").addClass("active");
    $(".modal-content-inner").addClass("modal-content-inner-active");
   });
  //remove class
   $(".close-animatedModal").click(function(){
      $(".content3").removeClass("active");
    }); 
  
  //4th modal
  $("a#modBtn4").click(function(){
    $(".content4").addClass("active");
    $(".modal-content-inner").addClass("modal-content-inner-active");
   });
  //remove class
   $(".close-animatedModal").click(function(){
      $(".content4").removeClass("active");
    }); 
  
  //5th modal
  $("a#modBtn5").click(function(){
    $(".content5").addClass("active");
    $(".modal-content-inner").addClass("modal-content-inner-active");
   });
  //remove class
   $(".close-animatedModal").click(function(){
      $(".content5").removeClass("active");
      $(".modal-content-inner").removeClass("modal-content-inner-active");
    });   
  
});