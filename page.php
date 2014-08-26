<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="includeBackground">
	<div class="container">

	<?php if(is_page('gallery')){ ?>

		<div id="gallery">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>

	<?php } else { ?>

		<div class="intro">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>

	<?php } ?>
	</div>
</section>

<?php if(is_page('san-francisco')){ ?>

<section class="register includeBackground">
	<div class="container">
		<img class="bean" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-bridge-icon.svg" alt="Golden Gate Bridge"/>
		<div class="registerBox">
			<div class="headlineWrap">
				<h2><span>San Francisco</span></h2>
			</div>
			<div class="dates">
				<h3>Apr. 4th</h3>
				<p>Kick Off @ GitHub</p>
			</div>
			<div class="dates second">
				<h3>Apr. 5th</h3>
				<p>Conference @ Adobe</p>
			</div>
		</div>
		<!--a class="registerButton" href="">Register</a-->
	</div>
</section>

<section class="container speakers">
	<h3>Past Speakers</h3>

	<ul class="profile">
	<?php query_posts(array(
		'post_type' => 'speakers', 
		'location' => 'san-francisco',
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

<?php } ?>

<?php if(is_page('purpose')) { ?>
	<section class="team">
		<div class="container">
			<h3>Founders</h3>
			<ul class="profile">
			<?php query_posts(array('post_type' => 'member', 'level' => 'founders'));  while (have_posts ()): the_post(); ?> 
						
			<?php
				$company = get_post_meta($post->ID, 'dbt_company', true);
				$position = get_post_meta($post->ID, 'dbt_position', true);
				$twitterHandle = get_post_meta($post->ID, 'dbt_twitter', true);
				$tags = '@';
				$twitter = str_replace($tags, "", $twitterHandle);
			?>
			
				<li>
				<?php if($twitterHandle){
					echo '<a href="https://twitter.com/' . $twitter . '" target="blank">';
					echo the_post_thumbnail('people');
					echo '<h4>'; the_title(); echo '</h4>';
					if($position){
						echo '<p>' . $position;
						if($company){
							echo ', ' . $company;
						}
						echo '</p>';
					} 
					echo '</a>';

				} else {
					
					echo the_post_thumbnail('people');
					echo '<h4>' . the_title() . '</h4>';
					if($position){
						echo '<p>' . $position;
						if($company){
							echo ', ' . $company;
						}
						echo '</p>';
					} 
				}?>	
				</li>
									
			<?php endwhile; ?>
			</ul>
	</div>
		<?php wp_reset_query(); ?>
		
		<div class="container">
			<h3>Meet the Board</h3>
			<ul class="profile">
			<?php query_posts(array('post_type' => 'member', 'level' => 'board-member'));  while (have_posts ()): the_post(); ?> 
						
			<?php
				$company = get_post_meta($post->ID, 'dbt_company', true);
				$position = get_post_meta($post->ID, 'dbt_position', true);
				$twitterHandle = get_post_meta($post->ID, 'dbt_twitter', true);
				$tags = '@';
				$twitter = str_replace($tags, "", $twitterHandle);
			?>

				<li>
				<?php if($twitterHandle){
					echo '<a href="https://twitter.com/' . $twitter . '" target="blank">';
					echo the_post_thumbnail('people');
					echo '<h4>'; the_title(); echo '</h4>';
					if($position){
						echo '<p>' . $position;
						if($company){
							echo ', ' . $company;
						}
						echo '</p>';
					} 
					echo '</a>';

				} else {
					
					echo the_post_thumbnail('people');
					echo '<h4>' . the_title() . '</h4>';
					if($position){
						echo '<p>' . $position;
						if($company){
							echo ', ' . $company;
						}
						echo '</p>';
					} 
				}?>	
				</li>
									
			<?php endwhile; ?>
			</ul>
		</div>
		<?php wp_reset_query(); ?>
		<div class="container">
			<h3>Volunteers</h3>
			<ul class="profile">
				<?php query_posts(array('post_type' => 'member', 'level' => 'volunteer'));  while (have_posts ()): the_post(); ?> 
						
				<?php
					$position = get_post_meta($post->ID, 'dbt_position', true);
					$company = get_post_meta($post->ID, 'dbt_company', true);
					$twitterHandle = get_post_meta($post->ID, 'dbt_twitter', true);
					$tags = '@';
					$twitter = str_replace($tags, "", $twitterHandle);
				?>

				<li>
				<?php if($twitterHandle){
					echo '<a href="https://twitter.com/' . $twitter . '" target="blank">';
					echo the_post_thumbnail('people');
					echo '<h4>'; the_title(); echo '</h4>';
					if($company){
						echo '<p>' . $company; echo '</p>';
					} 
					echo '</a>';

				} else {
					
					echo the_post_thumbnail('people');
					echo '<h4>' . the_title(); echo '</h4>';
					if($company){
						echo '<p>' . $company; echo '</p>';
					} 
				}?>	
				</li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_query(); ?>
		</div>
	</section>
<?php } ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>