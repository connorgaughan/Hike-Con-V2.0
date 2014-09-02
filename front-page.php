<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id="details" class="includeBackground">
	<div class="container">
		<div class="intro">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<img class="bean" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-cloud-gate-icon.svg" alt="Cloud Gate"/>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</section>
<section class="register includeBackground">
	<div class="registerBox">
		<div class="dates">
			<h3>Oct. 24th</h3>
			<p>Kick Off @ <a href="http://workshopchicago.co/#home">Workshop</a></p>
			<p>Friday, 6-9p</p>
		</div>
		<div class="dates second">
			<h3>Oct. 25th</h3>
			<p>Conference @ <a href="http://www.morningstar.com/">Morningstar</a></p>
			<p>Saturday, 8a-6p</p>
		</div>
	</div>
</section>

<section class="photoGallery">
	 <?php 
		$gallery = get_post_gallery_images( 236 );

		$i = 0;
		foreach($gallery as $image){
			if($i < 4){
				echo '<img src="'.$image.'" />';
				$i++;
			}
		}
	?>
	<div class="buttonWrapper">
		<a href="<?php echo get_bloginfo('url'); ?>/gallery" class="button">S.F. Photo Gallery</a>
	</div>
</section>

<section id="speakers" class="container speakers">
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
	<p class="center">More Speakers TBA</p>
	<?php wp_reset_query(); ?>
</section>

<section id="schedule" class="container schedule">
	<h3>Schedule</h3>
	<div class="friday">
		<h4>Friday, October 24th</h4>
		<div class="scheduleNode">
			<time>6p</time>
			<div class="content">
				<p>Kick Off Party @ <a href="http://workshopchicago.co/#home">Workshop</a></p>
			</div>
		</div>
	</div>
	<div class="saturday">
		<h4>Saturday, October 25th</h4>
		<div class="scheduleNode">
			<time>TBA</time>
			<div class="content">
				<p>Schedule TBD</p>
			</div>
		</div>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>