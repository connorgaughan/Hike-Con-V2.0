<header class="fixedNav">
	<div class="container">
		<div class="presents">
			<a href="http://learnthesecrethandshake.com/" title="Learn the Secret Handshake">
				<?php if(is_front_page()){ ?>
					<img class="tsh" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-tsh-logo-revised.png" alt="The Secret Handshake" />
				<?php } else { ?>
					<img class="tsh" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-tsh-logo-sans-tag.png" alt="The Secret Handshake" />
				<?php } ?>
			</a>
		</div>
		<?php wp_nav_menu(
			array(
				'container' 		=> 'nav',
				'container_class' 	=> 'menuContainer',
				'menu_class' 		=> 'menu',
				'theme_location' 	=> 'primary'
			)
		);?>
		<div class="menuToggle desktopHide"><span></span></div>
	</div>
</header>

<?php if(is_front_page()){ ?>

<section class="homeHero">
	<ul class="slider">
		<li class="slide1">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide2">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide3">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide4">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
	</ul>
</section>

<?php } else {  ?> 

<section class="hero">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<?php } // end if ?>

