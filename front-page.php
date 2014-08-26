<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="includeBackground">
	<div class="container">
		<div class="intro">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>

		</div>
	</div>
</section>

<section class="photoGallery">
	<a href="<?php echo get_bloginfo('url'); ?>/gallery" class="button">Photo Gallery</a>
</section>

<section class="register includeBackground">
	<div class="container">
		<img class="bean" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-cloud-gate-icon.svg" alt="Cloud Gate"/>
		<div class="registerBox">
			<div class="headlineWrap">
				<h2><span>Join us in Chicago</span></h2>
			</div>
			<div class="dates">
				<h3>Oct. 24th</h3>
				<p>Kick Off @ TBD</p>
				<p>Friday, 6-9p</p>
			</div>
			<div class="dates second">
				<h3>Oct. 25th</h3>
				<p>Conference @ TBD</p>
				<p>Saturday, 8a-6p</p>
			</div>
		</div>
		<a class="registerButton" href="">Register</a>
	</div>
</section>

<section class="container speakers">
	<h3>Speakers</h3>

	<ul class="profile">
	<?php query_posts(array(
		'post_type' => 'speakers', 
		'location' => 'chicago',
		'orderby'=> 'title', 
		'order' => 'ASC',
		'p' => $_GET['pid'])
		);  while (have_posts ()): the_post(); ?> 
		
		<?php
			$details = get_post_meta($post->ID, 'dbt_details', true);
			$twitterHandle = get_post_meta($post->ID, 'dbt_talk-twitter', true);
			$company = get_post_meta($post->ID, 'dbt_talk-company', true);
			$website = get_post_meta($post->ID, 'dbt_talk-website', true);
			//$tags = '@';
			//$twitter = str_replace($tags, "", $twitterHandle);
		?>
		
		<li>
			<a class="modal" href="<?php bloginfo('url'); ?>/speakers?pid=<?php echo $post->ID; ?>">
				<?php the_post_thumbnail('people'); ?>
				<h4><?php the_title(); ?></h4>
				<p><?php echo $company; ?></p>
				<!--p><?php echo $twitterHandle; ?></p-->
			</a>
		</li>
								
	<?php endwhile; ?>
	</ul>
	<?php wp_reset_query(); ?>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>