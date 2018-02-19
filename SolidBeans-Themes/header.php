
<?php
/*
main headrer template
*/
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Solidbeans">
    <meta name="author" content="Imran Syed">

  </head>

<?php wp_head(); ?>


<body id="page-top">
<header  class="header_banner">
    <!-- Navigation -->
	  
<nav class="navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	
<a class="navbar-brand js-scroll-trigger" href="/">
	<img src='<?php echo wp_get_attachment_url(get_theme_mod("solidbeans_logo_callout_image")) ?>' class="logoimage"/>
	</a>
 
<div class="navigation_wrap">
<nav class="menuwrap_slideout">
   <ul>
      <li>earth</li>
      <li>venus</li>
      <li>pluto</li>
    </ul>
  </nav>
	<div class="open-overlay js-nav">
		<span class="bar-top"></span>
		<span class="bar-middle"></span>
		<span class="bar-bottom"></span>
	</div>
</div>
	  
<div class="overlay-navigation navbar">
  <nav class="col_nav_menu" role="navigation" id="HB_navigation">
    <!--<ul>
      <li><a href="#" data-content="The beginning">Home</a></li>
      <li><a href="#" data-content="Curious?">About</a></li>
      <li><a href="#" data-content="I got game">Skills</a></li>
      <li><a href="#" data-content="Only the finest">Works</a></li>
      <li><a href="#" data-content="Don't hesitate">Contact</a></li>
    </ul>-->
    <?php 
    wp_nav_menu( array(
        'theme_location' => 'fx_mobile_menu',
        'menu_id'     => 'primary-menu',
        'menu_class'     => 'primary-menu',
        'ul_id'     => 'primary-menu_ul',
         ) );
	?>
  </nav>
</div>


</nav> 

</header>