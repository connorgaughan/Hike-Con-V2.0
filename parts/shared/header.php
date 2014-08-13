<header class="hero">
	<div class="container">
		<?php wp_nav_menu(
			array(
				'container' 		=> 'nav',
				'container_class' 	=> 'menuContainer',
				'menu_class' 		=> 'menu',
				'theme_location' 	=> 'primary'
			)
		);?>

		<?php if(is_front_page()){ ?>
			
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php bloginfo( 'description' ); ?>

		<?php } else { ?> 

			<h1><?php the_title(); ?></h1>

		<?php } // end if ?>
	</div>
</header>
