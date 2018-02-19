<?php

if (!function_exists('solidbeans_setup') ):
	function solidbeans_setup(){
		//let wordpress handle the Title tags
		add_theme_support( 'title-tag' );
}
endif;
add_action('after_setup_theme', 'solidbeans_setup');


/* -------register menus  -------*/
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function register_solidbeans_menus(){
	register_nav_menus(
		array('primary' =>__('Primary Menu') ,
			  'footer'  =>__('Footer Menu')			  
	));
}
add_action('init', 'register_solidbeans_menus');



/*-------- CSS add stylesheets---------*/
function solidbean_styles(){
	//enqueue mainstylesheet
	wp_enqueue_style('solidbean_styles', get_stylesheet_uri() );

	//enqueue Bootstrap core CSS -->
	wp_enqueue_style('bootstrap', get_template_directory_uri() .'
			/bootstrap-4/css/bootstrap.min.css', false, '4.0.0' );
	//-- Custom styles for menu -->
	//wp_enqueue_script('bootstrap', get_template_directory_uri() . '
	//	/css/menu.css');
	wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style('Font_Awesome');

	wp_register_style( 'Font_Awesome_Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style('Font_Awesome_Montserrat');

	wp_register_style( 'KaushanScript', 'https://fonts.googleapis.com/css?family=Kaushan+Script');
	wp_enqueue_style('KaushanScript');


	wp_register_style('solidbeans_Font_Awesome_DroidSerif', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic');
	wp_enqueue_style('solidbeans_Font_Awesome_DroidSerif');

	wp_register_style('solidbeans_Font_Awesome_DroidSerif2', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic');
	wp_enqueue_style('solidbeans_Font_Awesome_DroidSerif2');

	wp_register_style('animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css');
	wp_enqueue_style('animate_css');

	wp_register_style('Arvo', 'https://fonts.googleapis.com/css?family=Arvo:400,700' );
	wp_enqueue_style('Arvo');

	wp_register_style('Cormorant_Infant', 'https://fonts.googleapis.com/css?family=Cormorant+Infant:700,700italic');
	wp_enqueue_style('Cormorant_Infant');

	/* ---------------- conditional karriär template ----------------- */

if (is_page_template('page-karrier-template.php')) {
	wp_enqueue_style('karriärStyle', get_stylesheet_directory_uri() . '/css/karrier-template.css');

	wp_register_style('animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css');
	wp_enqueue_style('animate_css');

	}

	/* ---------------- conditional kontakt-template.css template ----------------- */
if (is_page_template('page-kontakt_template.php')) {
	wp_enqueue_style('kontaktStyle', get_stylesheet_directory_uri() . '/css/kontakt-template.css');

	}


	/* ---------------- conditional VadViGor-template.css template ----------------- */
if (is_page_template('page-vadViGor_template.php')) {
	wp_enqueue_style('vadViGor', get_stylesheet_directory_uri() . '/css/vadViGor-template.css');

	}
}

add_action('wp_enqueue_scripts', 'solidbean_styles');

/* ------------- conditional Om_Oss template styles ------------- */
function wp_sb_enqueue_Om_Oss_template_assets() {
    if ( is_page_template( 'page-om_oss.php' ) ) {
        wp_enqueue_style( 'Om_Oss-template', get_template_directory_uri() . '/css/om_oss.css' );
        
    }
 }
add_action( 'wp_enqueue_scripts', 'wp_sb_enqueue_Om_Oss_template_assets' );



/* ------------- conditional vad vi gor template styles ------------- */
function wp_sb_enqueue_vad_vi_gor_template_assets() {
    if ( is_page_template( 'vad-vi-gor-template.php' ) ) {
        wp_enqueue_style( 'vad-vi-gor-template', get_template_directory_uri() . '/css/vad-vi-gor.css' );
        
    }
 }
add_action( 'wp_enqueue_scripts', 'wp_sb_enqueue_vad_vi_gor_template_assets' );




  	/*------------- js -------------*/
function solidbean_scripts(){
	//  jquery  
	wp_enqueue_script('jquery');
	wp_enqueue_script('solidbean_menu_script', get_template_directory_uri() .'/js/menu.js');
	wp_enqueue_script('solidbean_slideout_menu_script', get_template_directory_uri() .'/js/slideout_menu.js');

	//	bootstrap
	wp_register_script('solidbean_bootstrap_script', 
                        get_template_directory_uri() .'/bootstrap-4/js/bootstrap.min.js', array('jquery', '3.0.0', true));
	wp_enqueue_script('solidbean_bootstrap_script', 
                        get_template_directory_uri() .'/bootstrap-4/js/bootstrap.min.js');
}
add_action('wp_enqueue_script', 'solidbean_scripts');


/****  ********   **** KARRIÄR SCRIPTS ****  ********  ****/
function enqueue_karriar_js() {
  // change the template file name according to your file
  if (!is_page_template('page-karrier-template.php') ) 
  	return;
  	wp_enqueue_script('enqueue_karriar_js', get_template_directory_uri() . '/js/karriar_template_script.js', array('jquery'));
  
}
add_action('template_redirect','enqueue_karriar_js');
//////////////////////////


/****  ********   **** KONTAKT SCRIPTS ****  ********  ****/
function page_kontakt_template() {
  // change the template file name according to your file
  if (!is_page_template('page-kontakt_template.php') ) 
  	return;
  	wp_enqueue_script('page_kontakt_template', get_template_directory_uri() . '/js/kontakt_template_script.js', array('jquery'));
  
}
add_action('template_redirect','page_kontakt_template');
//////////////////////////

/****  ********   **** Vad vi gör SCRIPTS ****  ********  ****/
function page_vadViGor_template() {
  // change the template file name according to your file
  if (!is_page_template('page-vadViGor_template.php') ) 
  	return;
  	wp_enqueue_script('page_vadViGor_template', get_template_directory_uri() . '/js/karriar_template_script.js', array('jquery'));
  
}
add_action('template_redirect','page_vadViGor_template');
//////////////////////////

/****  ********   **** Vad OM OSS SCRIPTS ****  ********  ****/
function page_OmOss_template() {
  // change the template file name according to your file
  if (!is_page_template('page-om_oss.php') ) 
  	return;
  	wp_enqueue_script('page_OmOss_template', get_template_directory_uri() . '/js/karriar_template_script.js', array('jquery'));
  
}
add_action('template_redirect','page_OmOss_template');
//////////////////////////







function my_velocity_scripts() { 
    wp_register_script('velocityscript', 
                        get_template_directory_uri() .'https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js',   
                        array ('jquery'));
    wp_enqueue_script('velocityscript');
}
  add_action("wp_enqueue_scripts", "my_velocity_scripts");










/*----------load hamburger menu-----------------*/

function load_hamburger_menu(){
wp_register_script('menu-js', 
             get_template_directory_uri() .'/js/menu.js', array ('jquery'),'1.0',true );
wp_enqueue_script( 'menu-js');	
wp_enqueue_style('menu-style',
			 get_template_directory_uri() . '/css/menu.css');

}
add_action('wp_enqueue_scripts','load_hamburger_menu');

function load_slideout_menu(){
wp_register_script('slideout_menu-js', 
             get_template_directory_uri() .'/js/slideout_menu.js', array ('jquery'),'1.0',true );
wp_enqueue_script( 'slideout_menu-js');	
wp_enqueue_style('menu-style',
			 get_template_directory_uri() . '/css/menu.css');

}
add_action('wp_enqueue_scripts','load_slideout_menu');

function initiate_menu()
{
	echo "<script>";
	echo "<menu-js>";
	echo "</script>";
}


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/*Custom excerpt length

Instead of using the default 55-word limit, this function enables you to specify any length for your excerpts.*/
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


/*No “more” jumping for the “read more” link

One of the weirdest things that WordPress does is “jump” the reader to the location of the “<!--more-->” tag on the single-post-view when the “read more” link is clicked. It’s just awkward -- if the jump was on the same page, it would make sense, but to load a new page and then take the reader halfway down without explaining anything is just wrong. In any case, here is a nice little function that will stop the jumping once and for all:*/

/*------add a message to the dashboard------*/
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Welcome to SolidBean Theme! Need help? Contact the me <a href="mailto:imransyd.88@gmail.com">here</a>. </p>';
}


/*No “more” jumping for the “read more” link

One of the weirdest things that WordPress does is “jump” the reader to the location of the “<!--more-->” tag on the single-post-view when the “read more” link is clicked. It’s just awkward -- if the jump was on the same page, it would make sense, but to load a new page and then take the reader halfway down without explaining anything is just wrong. In any case, here is a nice little function that will stop the jumping once and for all:*/
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');
add_filter('the_content_more_link', 'remove_more_jump_link');

// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { 
		background-image: url('.get_bloginfo('template_directory').'/images/logo/innovation_logo_164x50.png) !important; 	
-webkit-background-size:80px !important;
background-size:200px !important; 
min-height:30px;
width:auto !important; 
height:30px  !important;	
margin:0px 0px  10px 0px !important;
	 }
	</style>';
}
add_action('login_head', 'custom_login_logo');



// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}



//Disable RSS Feeds in WordPress
function fb_disable_feed() {
wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}
 
add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);


//Remove Welcome Panel from WordPress Dashboard
remove_action('welcome_panel', 'wp_welcome_panel');

/*-------   ragister widgets   ----------*/
//header widget

function wpb_widgets_init() {
//intro-text  	intro-lead-in 1
	register_sidebar( array(
        'name'          => 'First Heading Text',
        'id'            => 'heading-text-1',
        'before_widget' => '<div class="chw-widget1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="intro-lead-in1">',
        'after_title'   => '</h2>',
    ) );
//intro-text  	intro-lead-in 2
	register_sidebar( array(
        'name'          => 'Second Heading Text',
        'id'            => 'heading-text-2',
        'before_widget' => '<div class="chw-widget11">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="intro-lead-in2">',
        'after_title'   => '</h2>',
    ) );


}
add_action( 'widgets_init', 'wpb_widgets_init' );






/* ------------  cutomization section starts ------------- */

/* customise homepage *
function SB_homepage_callout($wp_customize){
$wp_customize->add_section('SB_homepage_callout_section', array(
	'title'=>'homepage callout'));

//heading1
$wp_customize->add_setting('SB_homepage_callout_headline', array(
	'default'=>'Example Headline Text'));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
	'SB_homepage_callout_headline_control', array(
		'label'=>'Heading for first section',
		'section'=>'SB_homepage_callout_section',
		'settings'=>'SB_homepage_callout_headline',
		'type'=>'textarea',
	)));

//heading2
$wp_customize->add_setting('SB_homepage_callout_headline2', array(
	'default'=>'Example Headline Text'));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
	'SB_homepage_callout_headline_control', array(
		'label'=>'Heading for 2nd section',
		'section'=>'SB_homepage_callout_section',
		'settings'=>'SB_homepage_callout_headline2',
		'type'=>'textarea',
	)));

}


add_action('customize_register','SB_homepage_callout');*/


 /*		Logo 	*/
 
function solidbeans_logo_callout($wp_customize){

	$wp_customize->add_section('solidbeans_logo_callout_section',array(
		'title'=>'Logo Uploader'
	));
	$wp_customize->add_setting('solidbeans_logo_callout_image');

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 
	'solidbeans_logo_callout_image_control', array(
		'label'=>'Logo Image',
		'section'=>'solidbeans_logo_callout_section',
		'settings'=>'solidbeans_logo_callout_image',
		'width'=>'434',
		'height'=>'133',
	)));
}

add_action('customize_register', 'solidbeans_logo_callout');
/****************************************/

 /*		footer 	*/
 
function solidbeans_footer_callout($wp_customize){

	$wp_customize->add_section('solidbeans_footer_callout_section',array(
		'title'=>'Footer customise'
	));
	$wp_customize->add_setting('solidbeans_footer_callout_footerone',array(
		'default'=>'Copyright © Solidbeans 2017'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
	'SB_footer_callout_text_control', array(
		'label'=>'Footer',
		'section'=>'solidbeans_footer_callout_section',
		'settings'=>'solidbeans_footer_callout_footerone',
		'type'=>'textarea',
	)));


	$wp_customize->add_setting('solidbeans_footer_callout_footertwo',array(
		'default'=>'Copyright © Solidbeans 2017'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 
	'SB_footer_callout_text_control2', array(
		'label'=>'Footer',
		'section'=>'solidbeans_footer_callout_section',
		'settings'=>'solidbeans_footer_callout_footertwo',
		'type'=>'textarea',
	)));
}

add_action('customize_register', 'solidbeans_footer_callout');
/****************************************/

/* ------------  cutomization section ends  ------------- */