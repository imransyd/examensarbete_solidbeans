<?php
/*
front page template
*/

get_header();
?>




<div class="masthead">
  <div class="container">
	  
		<div class="intro-text">
		  <div class="intro-lead-in">
		  <div>
		  <?php

					if ( is_active_sidebar( 'heading-text-2' ) ) : ?>
					<div class="chw-first-heading-text" role="complementary">
					<?php dynamic_sidebar( 'heading-text-1' ); ?>
					</div>
     
				<?php endif; ?></div>
		</div>
		  <div class="intro-heading text-uppercase">
		  <?php

					if ( is_active_sidebar( 'heading-text-2' ) ) : ?>
					<div class="chw-first-heading-text" role="complementary">
					<?php dynamic_sidebar( 'heading-text-2' ); ?>
					</div>
     
				<?php endif; ?>
		</div>
		</div>
  </div>

<!-- scroll starts -->
<div id="sectionScroll" class="ScPlay">
  <a href="#socialicon"><span></span></a>
</div>
<!-- scroll ends -->

</div>







<!-- Clients 
<section id="py-5" class="fullWidth">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url') ?>/images/clients/Pensionsmyndigheten-logo.png"  width="150px" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url') ?>/images/clients/bankgirot-logo.png"  width="150px" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url') ?>/images/clients/Dualtech-IT-logga.png"  width="150px" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_url') ?>/images/clients/ework-logo.png"  width="150px" alt="">
        </a>
      </div>
    </div>
  </div>
</section>-->




<section id="socialicon" class="fullWidth">
      <div class="container">
        <div class="row list-inline banner-social-buttons">

              <div class=" col-md-3 col-sm-6"><div class="list-inline-item">
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg">
					<div class="socialpiccontainer">
					<div class="socialpic mx-auto">
					<img src="<?php bloginfo('template_url') ?>/images/social/twitter.png" height="100" width="100"/>
					</div>
					</div>
                </a>
              </div></div>
              <div class="col-md-3 col-sm-6"><div class="list-inline-item">
                <a href="https://facebook.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
					<div class="socialpiccontainer">
					<div class="socialpic mx-auto">
					<img src="<?php bloginfo('template_url') ?>/images/social/facebook.png" height="100" width="100"/>
					</div>
					</div>
                </a>
              </div></div>
              <div class="col-md-3 col-sm-6"><div class="list-inline-item">
                <a href="https://linkedin.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
					<div class="socialpiccontainer">
					<div class="socialpic mx-auto">
					<img src="<?php bloginfo('template_url') ?>/images/social/linkedin.png" height="100" width="100"/>
					</div>
					</div>
                </a>
              </div></div>
            

        </div>
      </div>
    </section>

  
<?php
get_footer();
?>