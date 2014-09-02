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

	<?php } else if(is_page('san-francisco')){ ?>

		<div id="details" class="intro">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<img class="bean" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/images/hike-bridge-icon.svg" alt="Golden Gate Bridge"/>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>

	<?php } ?>
	</div>
</section>

<?php if(is_page('san-francisco')){ ?>

<section class="register includeBackground">
	<div class="container">
		<div class="registerBox">
			<div class="dates">
				<h3>Apr. 4th</h3>
				<p>Kick Off @ GitHub</p>
			</div>
			<div class="dates second">
				<h3>Apr. 5th</h3>
				<p>Conference @ Adobe</p>
			</div>
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

<!--section id="schedule" class="container schedule">
	<h3>Schedule</h3>
	<div class="friday">
		<h4>Friday, April 4th</h4>
		<time>6-9p</time>
		<div class="content">
			<p>Daniel Burka</p>
			<small>Hike Kick Off Party - Check your email for sign-up information. If you have any questions, email us at <a href="mailto:hello@hikecon.com">hello@hikecon.com</a></small>
		</div>
	</div>
	<div class="saturday">
		<h4>Saturday, April 5th</h4>
		<div class="scheduleNode">
			<time>8-9a</time>
			<div class="content">
				<p>Registration</p>
				<small>Atrium</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>9-9:30a</time>
			<div class="content">
				<p>Coffee + Mingle</p>
				<small>Mess Hall</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>9:30-10a</time>
			<div class="content">
				<p>Welcome</p>
				<small>Laura Helen Winn and Jason Schwartz</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>10-10:45a</time>
			<div class="content">
				<p>Christopher Simmons</p>
				<small>Name Dropping | Mess Hall</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>10:45-11a</time>
			<div class="content">
				<p>break</p>
			</div>
		</div>
		<div class="scheduleNode">
			<time>11a-12p</time>
			<div class="content">
				<p>Alice Lee</p>
				<small>Start | Mess Hall</small>
			</div>
		</div>
		<h4>Lunch</h4>
		<div class="scheduleNode">
			<time>12-1:30p</time>
			<div class="content">
				<p>Lunch / Chat + Chew</p>
				<small>Mess Hall</small>
			</div>
		</div>
		<h4>Afternoon Session One</h4>
		<div class="scheduleNode">
			<time>1:30-2:45p</time>
			<div class="content">
				<p>Brian Singer</p>
				<small>How to Get Rich in Graphic Design | Mess Hall</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>1:30-2:45p</time>
			<div class="content">
				<p>Laura Brunow Miner, Toi Valentine, Melissa Cooper, Jason Hardy, Rick Byrne</p>
				<small>How to Get That Gig | Campfire</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>1:30-2:45p</time>
			<div class="content">
				<p>Ash Huang and Rachel Been</p>
				<small>What&rsquo;s Your Secret Sauce? Redefining a traditional design background | Canteen</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>2:45-3p</time>
			<div class="content">
				<p>Break</p>
			</div>
		</div>
		<h4>Afternoon Session Two</h4>
		<div class="scheduleNode">
			<time>3-4:15p</time>
			<div class="content">
				<p>Marc O&rsquo;Brien</p>
				<small>What to do if a glacier in Iceland throws a rock at your neck which automatically leads you to doubt your talents and question your confidence | Mess Hall</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>3-4:15p</time>
			<div class="content">
				<p>Stewart Scott-Curran</p>
				<small>How I Learned To Stop Worrying And Enjoy The Ride | Campfire</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>3-4:15p</time>
			<div class="content">
				<p>MacFadden and Thorpe</p>
				<small>Practical Advice for Dreamers | Compass</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>4-4:15p</time>
			<div class="content">
				<p>Break</p>
			</div>
		</div>
		<div class="scheduleNode">
			<time>4:30-5:15p</time>
			<div class="content">
				<p>Mike Monteiro</p>
				<small>How Designers Destroyed the World | Mess Hall</small>
			</div>
		</div>
		<div class="scheduleNode">
			<time>6-8p</time>
			<div class="content">
				<p>After Party</p>
				<small><a href="http://somastreatfoodpark.com/">Soma Street Food Park</a></small>
			</div>
		</div>
	</div>
</section-->

<?php } ?>

<?php if(is_page('purpose')) { ?>
	<section class="team">
		<div class="container">
			<h3>Hike is the conference we wish we'd attended in school.</h3>

			<ul class="profile founders">
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
	<div class="redBox">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
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