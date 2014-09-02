<?php
/*
Template Name: Speakers
*/
?>

<?php query_posts(array( 'post_type' => 'speakers',  'p' => $_GET['pid']) );  while (have_posts ()): the_post(); ?> 
	
<article class="speakerModal">
	<div class="speakerBorder">
		<?php
			$company = get_post_meta($post->ID, 'dbt_talk-company', true);
			$website = get_post_meta($post->ID, 'dbt_talk-website', true);
			$time = get_post_meta($post->ID, 'dbt_talk-details', true);
			$twitterHandle = get_post_meta($post->ID, 'dbt_talk-twitter', true);
			$tags = '@';
			$twitter = str_replace($tags, "", $twitterHandle);
			$url = preg_replace('#^https?://#', '', rtrim($website,'/'));
		?>
		<div class="speakerImage"><?php the_post_thumbnail('people'); ?></div>		
		<h1><?php the_title(); ?></h1>
		<?php if( $time ){ echo '<time>' . $time . '</time>'; } ?>

		<ul>
		<?php if( $twitterHandle ){
			echo '<li><a href="https://twitter.com/' . $twitter . '" target="blank">' . $twitterHandle . '</a></li>';
		} if( $website ){
			echo '<li><a href="http://' . $url . '">' . $company . '</a></li>';
		} ?>
		</ul>

		<?php the_content(); ?>
	</div>
</article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
