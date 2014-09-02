<header class="fixedNav">
	<div class="container">
		<div class="presents">
			<a href="<?php echo get_bloginfo(url); ?>" title="Learn the Secret Handshake">
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

<section id="welcome" class="hero">
	<ul class="slider">
		<li class="slide1">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center">October 24-25th | Chicago, Illinois</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide2">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center">October 24-25th | Chicago, Illinois</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide3">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center">October 24-25th | Chicago, Illinois</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide4">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center">October 24-25th | Chicago, Illinois</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
		<li class="slide5">
			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-logo.svg" alt="Hike" /></h1>
			<p class="center"><?php echo bloginfo( 'description' ); ?></p>
			<p class="center">October 24-25th | Chicago, Illinois</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Register</a></p>
		</li>
	</ul>
</section>

<?php } else if(is_page('san-francisco')) {  ?> 

<section id="welcome" class="hero">
	<ul class="slider">
		<li class="slide1">
			<h1><?php the_title(); ?></h1>
			<p class="center">We had so much fun!</p>
			<p class="center">April 4-5th</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Sold Out</a></p>
		</li>
		<li class="slide2">
			<h1><?php the_title(); ?></h1>
			<p class="center">We had so much fun!</p>
			<p class="center">April 4-5th</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Sold Out</a></p>
		</li>
		<li class="slide3">
			<h1><?php the_title(); ?></h1>
			<p class="center">We had so much fun!</p>
			<p class="center">April 4-5th</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Sold Out</a></p>
		</li>
		<li class="slide4">
			<h1><?php the_title(); ?></h1>
			<p class="center">We had so much fun!</p>
			<p class="center">April 4-5th</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Sold Out</a></p>
		</li>
		<li class="slide5">
			<h1><?php the_title(); ?></h1>
			<p class="center">We had so much fun!</p>
			<p class="center">April 4-5th</p>
			<p class="center social"><a href="https://twitter.com/secrethndshk" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/twitter.png" /></a><a href="https://www.facebook.com/learnthesecrethandshake"><img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/facebook.png" /></a></p>
			<p class="center desktopHide"><a href="#" class="register">Sold Out</a></p>
		</li>
	</ul>
</section>

<?php } else { ?>

<section class="hero">
	<ul class="slider">
		<li class="slide1">
			<h1><?php the_title(); ?></h1>
		</li>
		<li class="slide2">
			<h1><?php the_title(); ?></h1>
		</li>
		<li class="slide3">
			<h1><?php the_title(); ?></h1>
		</li>
		<li class="slide4">
			<h1><?php the_title(); ?></h1>
		</li>
		<li class="slide5">
			<h1><?php the_title(); ?></h1>
		</li>
	</ul>
</section>

<?php } // end if ?>
<?php if(is_front_page()){ ?>
	<aside class="slideMenu">
		<nav class="container">
			<ul>
				<li><a class="scroll" href="#welcome">Welcome</a></li>
				<li><a class="scroll" href="#details">Details</a></li>
				<li><a class="scroll" href="#schedule">Schedule</a></li>
				<li><a class="scroll" href="#speakers">Speakers</a></li>
				<li><a class="scroll" href="#sponsors">Sponsors</a></li>
				<li><a class="register" href="https://www.eventbrite.com/e/the-secret-handshake-presents-hike-chicago-tickets-10567536787">Register</a></li>
			</ul>
		</nav>	
	</aside>
<?php } else if(is_page('san-francisco')){ ?>
	<aside class="slideMenu">
		<nav class="container">
			<ul>
				<li><a href="#welcome">Welcome</a></li>
				<li><a class="scroll" href="#details">Details</a></li>
				<li><a class="scroll" href="#schedule">Schedule</a></li>
				<li><a class="scroll" href="#speakers">Speakers</a></li>
				<li><a class="scroll" href="#sponsors">Sponsors</a></li>
				<li><a class="register" href="">Sold Out</a></li>
			</ul>
		</nav>	
	</aside>
<?php } ?>


