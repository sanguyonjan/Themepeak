<?php
/**
 * The template for Managing Theme Structure
 *
 * @package themepeak
 * @subpackage Themepeak
 * @since Themepeak 0.1 
 */


if ( ! function_exists( 'themepeak_doctype' ) ) :
	/**
	 * Doctype Declaration
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_doctype() {
?><!DOCTYPE html>
<html <?php language_attributes(); ?>><?php
	}
endif;
add_action( 'themepeak_doctype', 'themepeak_doctype', 10 );


if ( ! function_exists( 'themepeak_head' ) ) :
	/**
	 * Header Codes
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_head() {
	?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js"></script>
<![endif]-->
<?php
	}
endif;
add_action( 'themepeak_before_wp_head', 'themepeak_head', 10 );


if ( ! function_exists( 'themepeak_page_start' ) ) :
	/**
	 * Start div id #page
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_page_start() {
		?>
		<div id="page" class="site">
		<?php
	}
endif;
add_action( 'themepeak_header', 'themepeak_page_start', 10 );


if ( ! function_exists( 'themepeak_page_end' ) ) :
	/**
	 * End div id #page
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'themepeak_footer', 'themepeak_page_end', 300 );


if ( ! function_exists( 'themepeak_header_start' ) ) :
	/**
	 * Start Header id #masthead and class .wrapper
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_header_start() {
		?>
		<header id="masthead" class="site-header" role="banner">
		<?php
	}
endif;
add_action( 'themepeak_header', 'themepeak_header_start', 50 );

if ( ! function_exists( 'themepeak_header' ) ) :
	/**
	 * Display Header Gridder
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_header() {
		global $widget_header;
		tp_display_gridder_widget($widget_header,'header');
	}
endif;
add_action( 'themepeak_header', 'themepeak_header', 50 );


if ( ! function_exists( 'themepeak_header_end' ) ) :
	/**
	 * End Header id #masthead and class .wrapper
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_header_end() {
		?>
		</header><!-- #masthead -->
		<?php
	}
endif;
add_action( 'themepeak_header', 'themepeak_header_end', 100 );


if ( ! function_exists( 'themepeak_content_start' ) ) :
	/**
	 * Start div id #content and class .wrapper
	 *
	 * @since Themepeak 0.1 
	 *
	 */
	function themepeak_content_start() {
		?>
<div id="content" class="site-content">
	<?php
	global $widget_body;
	if(is_front_page())
	tp_display_gridder_widget($widget_body,'body');
	}
	
endif;
add_action('themepeak_content', 'themepeak_content_start', 10 );


if ( ! function_exists( 'themepeak_content_end' ) ) :
	/**
	 * End div id #content and class .wrapper
	 *
	 * @since Themepeak 0.1 
	 */
	function themepeak_content_end() {
		?>
	    </div><!-- #content -->
		<?php
	}

endif;
add_action( 'themepeak_after_content', 'themepeak_content_end', 60 );


if ( ! function_exists( 'themepeak_sidebar_secondary' ) ) :
	/**
	 * Secondary Sidebar
	 * 
	 * @since Themepeak 0.1 
	 */
	function themepeak_sidebar_secondary() {

		get_sidebar( 'secondary' );
	}

endif;


if ( ! function_exists( 'themepeak_footer_content_start' ) ) :
/**
 * Start footer id #colophon
 *
 * @since Themepeak 0.1 
 */
function themepeak_footer_content_start() {
	?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php
}
endif;
add_action('themepeak_footer', 'themepeak_footer_content_start', 210 );


if ( ! function_exists( 'themepeak_footer_gridder' ) ) :
/**
 * Footer Sidebar
 *
 * @since Themepeak 0.1 
 */
function themepeak_footer_gridder() {
	//get_sidebar( 'footer' );
	global $widget_footer;
	tp_display_gridder_widget($widget_footer,'footer');
}
endif;
add_action( 'themepeak_footer', 'themepeak_footer_gridder', 215 );


if ( ! function_exists( 'themepeak_footer_content_end' ) ) :
/**
 * End footer id #colophon
 *
 * @since Themepeak 0.1 
 */
function themepeak_footer_content_end() {
	?>
	</footer><!-- #colophon -->
	<?php
}
endif;
add_action( 'themepeak_footer', 'themepeak_footer_content_end', 220 );


function themepeak_content_wrap_start(){
	?>
	<div class="content-wrap">
	<div class="multiple-sidebar">
	<?php 
}
function themepeak_content_wrap_end(){
	?>
	</div> <!-- Content Wrapper End -->
	<?php 
}

// Layout function test
$layout_option = get_theme_mod('page_layout_settings'); 
if($layout_option == 'three-columns-primary-first'){
	add_action('themepeak_content', 'themepeak_content_wrap_start',20 );
	add_action('themepeak_after_content', 'themepeak_content_wrap_end', 50 );
	add_action('themepeak_after_content', 'themepeak_sidebar_secondary', 55);
}
elseif($layout_option == 'three-columns-secondary-first'){
	add_action('themepeak_content', 'themepeak_sidebar_secondary', 15 );	
	//add_action('themepeak_content', 'themepeak_content_wrap_start',20 );
	//add_action('themepeak_content', 'themepeak_content_wrap_end', 300 );
}
