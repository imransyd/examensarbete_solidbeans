<?php 
/*
main template file
*/
	get_header();
?>


 <!-- template width -->
    <section class="bg-light" id="team">
      <div class="container">
      	<div class="row">
          <div class="col-lg-11 mx-auto text-center">
      	  
            <main class="main-content">

            	<?php
            	//start loop here
            	if(have_posts()):
            		while( have_posts() ): the_post();
            			?>
            			<p> <?php the_content(); ?> </p>
            	<?php
            		endwhile;
            	endif;
            	?>
            </main>
          </div>
        </div>
      </div>
    </section>




    <?php
    get_footer();
    ?>