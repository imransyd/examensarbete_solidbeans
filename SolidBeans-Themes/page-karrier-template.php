<?php
/*
Template Name: karriär page
*/?>
 <?php get_header(); ?>


 <body>
  <div class="outerColumnContainer">
  <div class="columnContainer">
    <!--button to first modal-->
 <div class="modalButtonColumn">
    <a id="modBtn1" class="open" href="#Modal1st">
      <div  class="AMModBtnTitle">
        <h1>
      <?php the_field('karriar_first_column_header');?>
        
      </h1>
      </div>
     </a>
  </div>
    <!--button to 2nd modal-->
  <div class="modalButtonColumn">
    <a id="modBtn2" class="open" href="#Modal2nd">
      <div  class="AMModBtnTitle">
        <h1>
      <?php the_field('karriar_second_column_header');?>
        
</h1>
      </div>
     </a>
  </div>
    <!--button to 3rd modal-->
  <div class="modalButtonColumn">
    <a id="modBtn3" class="open" href="#Modal3rd">
      <div  class="AMModBtnTitle">
        <h1>
      <?php the_field('karriar_third_column_header');?>
        
</h1>
      </div>
     </a>
  </div>
    <!--button to 4th modal-->
  <div class="modalButtonColumn">
    <a id="modBtn4" class="open" href="#Modal4th">
      <div  class="AMModBtnTitle">
        <h1>
      <?php the_field('karriar_fourth_column_header');?>
        
</h1>
      </div>
     </a>
  </div>
    <!--button to 5th modal-->

  </div>
     

<!--modal window-->
  <!--modal window 1-->
<div id="modal1st" class="modalContentOuter content1">


  <div class="modal-content-inner">
    
    <h1>
      <?php the_field('karriar_first_window_content_heading');?>
        
      </h1>
    <p>
      <?php the_field('karriar_first_window_content');?>
        
      </p>
      </div>
  <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
 <div class="close-animatedModal"><span class="fa fa-close"></span></div>
  </div>

      </div>

 
  <!--modal window 2-->
<div id="modal2nd" class="modalContentOuter content2">
  

  <div class="modal-content-inner">
    
    <h1>
      <?php the_field('karriar_second_window_content_heading');?>
        
      </h1>
    <p>
      <?php the_field('karriar_second_window_content');?>
        
      </p>
      </div>

  <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
 <div class="close-animatedModal"><span class="fa fa-close"></span></div>
  </div>

      </div>
  
  <!--modal window 3-->
<div id="modal3rd" class="modalContentOuter content3">
  

  <div class="modal-content-inner">
    
    <h1>
      <?php the_field('karriar_third_window_content_heading');?>
        
      </h1>
    <p>
      <?php the_field('karriar_third_window_content');?>
        
      </p>
      </div>
  <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
 <div class="close-animatedModal"><span class="fa fa-close"></span></div>
  </div>
      </div>
  <!--modal window 4-->
<div id="modal4th" class="modalContentOuter content4">


  <div class="modal-content-inner">
    
    <h1>
      <?php the_field('karriar_fourth_window_content_heading');?>
        
      </h1>
    <p>
      <?php the_field('karriar_fourth_window_content');?>
        
      </p>
      </div>
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
 <div class="close-animatedModal"><span class="fa fa-close"></span></div>
  </div>
      </div>


  
  <!--modal window 5-->


  
</div>
</body>


<?php
get_footer();
?>
