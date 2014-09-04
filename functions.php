<?php

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

	// add google analytics to footer
	function add_google_analytics() {
		if (! is_user_logged_in() ){ ?>
			<script type="text/javascript">
				var sc_project=9451687; 
				var sc_invisible=1; 
				var sc_security="b69f0ce2"; 
				var scJsHost = (("https:" == document.location.protocol) ?
				"https://secure." : "http://www.");
				document.write("<sc"+"ript type='text/javascript' src='" +
				scJsHost+
				"statcounter.com/counter/counter.js'></"+"script>");
			</script>
			<noscript>
				<div class="statcounter">
					<a title="website statistics" href="http://statcounter.com/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/9451687/0/b69f0ce2/1/" alt="website statistics"></a>
				</div>
			</noscript>
			<script>
	  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  			ga('create', 'UA-46281118-1', 'hikecon.com');
	  			ga('send', 'pageview');
			</script>
		<?php }
	}
	add_action('wp_footer', 'add_google_analytics');


	// Required external files
	require_once( 'external/starkers-utilities.php' );


	// Increase Image Quality
	function gpp_jpeg_quality_callback($arg){
		return (int)100;
	}
	add_filter('jpeg_quality', 'gpp_jpeg_quality_callback');

	// Add SVG Upload Support
	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );


	// Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size( 'native', 1600, 9999 );
	add_image_size( 'full', 1200, 9999 );
	add_image_size( 'large', 1000, 9999 );
	add_image_size( 'medium', 800, 9999 );
	add_image_size( 'small', 600, 9999 );
	add_image_size( 'thumb', 450, 9999 );
	add_image_size( 'people', 200, 200, array( 'center', 'center' ) );
	add_image_size( 'gallery', 550, 550, array( 'center', 'center' ) );
	
	// Page Excerpts
	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
	     add_post_type_support( 'page', 'excerpt' );
	}
	
	// Register Nav Menu
	register_nav_menus(array('primary' => 'Primary Navigation'));

	
	// Actions and Filters
	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );
	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );


	// Custom Post Types
	require_once( 'parts/functions/post-types.php' );
	require_once( 'parts/functions/speakers-metaBox.php' );
	require_once( 'parts/functions/sponsors-metaBox.php' );
	
	// Scripts
	function starkers_script_enqueuer() {
		wp_deregister_script( 'jquery' );

		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js','', '', true );
		
		wp_enqueue_script( 'site', get_template_directory_uri().'/_assets/js/site.min.js', array( 'jquery' ), '', true );

		wp_enqueue_style ( 'gaFonts', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700', '', '', 'screen' );

		wp_enqueue_style( 'screen', get_stylesheet_directory_uri().'/_assets/css/style.css', '', '', 'screen' );
	}	
