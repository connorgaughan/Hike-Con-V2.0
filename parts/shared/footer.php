<footer>
<?php if(is_page('san-francisco')){ ?>
	<div id="sponsors" class="container">
		<img class="heart" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-heart-icon.svg" alt="Love"/>
		<h3>Thank you to our partners</h3>
		<ul>
		<?php query_posts(array( 'post_type' => 'sponsors', 'tiers' => 'tier-one', 'order' =>'asc'));  while (have_posts ()): the_post(); ?> 
			<?php $url = get_post_meta($post->ID, 'dbt_sponsors-link', true); ?>
			<li><a href="<?php echo $url ?>"><?php the_post_thumbnail(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>
	</div>
<?php }else if(is_front_page()) {?>
	<div id="sponsors" class="container">
		<img class="heart" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-heart-icon.svg" alt="Love"/>
		<h3>Thank you to our partners</h3>
		<ul>
		<?php query_posts(array( 'post_type' => 'sponsors', 'tiers' => 'chicago', 'order' =>'asc'));  while (have_posts ()): the_post(); ?> 
			<?php $url = get_post_meta($post->ID, 'dbt_sponsors-link', true); ?>
			<li><a href="<?php echo $url ?>"><?php the_post_thumbnail(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>
	</div>
<?php } ?>
	<div class="footerBottom">
		<div class="container">
			<p>Created by<br /><a href="http://www.learnthesecrethandshake.com"><img class="footerLogo"src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-tsh-logo-sans-tag.png" alt="The Secret Handshake"/></a></p>
			<p><strong>Questions?</strong> <a href="mailto:hello@hikecon.com">hello@hikecon.com</a> or Tweet <a href="https://twitter.com/secrethndshk">@secrethndshk</a></p>
			<p>Made possible by our <a href="<?php echo get_bloginfo('url')?>/our-purpose">Chairs, Board &amp; Volunteers</a></p>
		</div>
	</div>

</footer>
