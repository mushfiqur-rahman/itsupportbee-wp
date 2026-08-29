<?php
/**
 * The template for displaying sidebar.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<aside class="single-sidebar">
	
	<!-- 1. Search Widget -->
	<div class="sidebar-widget search-widget">
		<h3>Search</h3>
		<?php get_search_form(); ?>
	</div>

	<!-- 2. Previous (Recent) Post List -->
	<div class="sidebar-widget recent-posts-widget">
		<h3>Previous Posts</h3>
		<ul>
			<?php
			$recent_posts = wp_get_recent_posts( array(
				'numberposts' => 5,
				'post_status' => 'publish',
				'exclude'     => is_single() ? get_the_ID() : '' 
			) );
			
			foreach( $recent_posts as $recent ) {
				echo '<li><a href="' . get_permalink( $recent['ID'] ) . '">' . esc_html( $recent['post_title'] ) . '</a></li>';
			}
			wp_reset_query();
			?>
		</ul>
	</div>

	<!-- 3. Post Categories -->
	<div class="sidebar-widget categories-widget">
		<h3>Categories</h3>
		<ul>
			<?php 
			wp_list_categories( array(
				'title_li'   => '', 
				'show_count' => true 
			) ); 
			?>
		</ul>
	</div>

	<!-- 4. Social Sites (with FontAwesome and Nofollow) -->
	<div class="sidebar-widget social-widget">
		<h3>Follow Us</h3>
		<div class="social-links">
			<a href="https://www.linkedin.com/company/itsupportbee" target="_blank" rel="nofollow" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
			<a href="https://www.facebook.com/itsupportbee" target="_blank" rel="nofollow" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
			<a href="https://x.com/itsupportbee" target="_blank" rel="nofollow" aria-label="X (Twitter)"><i class="fab fa-x-twitter"></i></a>
			<a href="https://www.youtube.com/@itsupportbee" target="_blank" rel="nofollow" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
			<a href="https://www.instagram.com/itsupportbee" target="_blank" rel="nofollow" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
			<a href="https://www.tiktok.com/@itsupportbee" target="_blank" rel="nofollow" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
		</div>
	</div>

</aside>
