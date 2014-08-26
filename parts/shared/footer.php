<footer>
	<div class="container">
		<img class="heart" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-heart-icon.svg" alt="Love"/>
		<h3>Thank you to our partners</h3>
		<ul>
		<?php query_posts(array( 'post_type' => 'sponsors'));  while (have_posts ()): the_post(); ?> 
			<?php $url = get_post_meta($post->ID, 'dbt_sponsors-link', true); ?>
			<li><a href="<?php echo $url ?>"><?php the_post_thumbnail(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>
	</div>
	<div class="footerBottom">
		<div class="container">
			<p>Questions? <a href="mailto:hello@hikecon.com">hello@hikecon.com</a> or tweet <a href="https://www.twitter.com/hikecon">@hikecon</a></p>
			<p><a href="<?php echo get_bloginfo('url')?>/our-purpose">Purpose</a> &bull; <a href="http://www.learnthesecrethandshake.com">The Secret Handshake</a></p>
			<p>Organized by <a href="">Jason Schwartz</a> &amp; <a href="">Laura Winn</a></p>
		</div>
	</div>
</footer>
