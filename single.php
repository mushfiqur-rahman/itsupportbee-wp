<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<style>
	/* Import Merriweather from Google Fonts */
	@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

	/* Force Merriweather on all text inside the single post layout */
	.single-post-wrapper,
	.single-post-wrapper h1,
	.single-post-wrapper h2,
	.single-post-wrapper h3,
	.single-post-wrapper h4,
	.single-post-wrapper h5,
	.single-post-wrapper h6,
	.single-post-wrapper p,
	.single-post-wrapper a,
	.single-post-wrapper span,
	.single-post-wrapper li {
		font-family: 'Merriweather', serif !important;
	}
	
	/* Post Header & Meta */
	.post-header-custom {
		margin-bottom: 25px;
	}
	.post-header-custom .entry-title {
		margin-top: 0;
		margin-bottom: 10px;
		font-size: 2.5rem;
		color: var(--e-global-color-primary, #000000);
	}
	.post-meta {
		font-size: 0.95rem;
		color: #666666;
		margin-bottom: 20px;
		font-style: italic;
	}
	.post-meta a {
		color: var(--e-global-color-primary, #333333) !important;
		font-weight: bold;
		text-decoration: none;
	}
	.post-meta a:hover {
		text-decoration: underline;
	}

	/* Increase Body Font Size to 16px */
	.single-post-wrapper p,
	.single-post-wrapper li,
	.single-post-wrapper span,
	.single-post-wrapper a {
		font-size: 16px !important;
		line-height: 1.7; /* Adds comfortable spacing between lines */
	}

	/* Layout Styles */
	.single-post-wrapper {
		display: flex;
		flex-wrap: wrap;
		max-width: 1200px;
		margin: 40px auto;
		gap: 40px;
		padding: 0 20px;
	}
	.single-main-content {
		flex: 1 1 65%;
		max-width: 65%;
	}
	.single-sidebar {
		flex: 1 1 30%;
		max-width: 30%;
	}
	
	/* Featured Image */
	.post-featured-image {
		margin-bottom: 25px;
	}
	.post-featured-image img {
		width: 100%;
		height: auto;
		border-radius: 8px;
	}
	
/* Pagination Styles */
	.post-pagination {
		display: flex;
		justify-content: space-between;
		margin-top: 30px;
		margin-bottom: 40px;
		padding: 20px;
		background: #f9f9f9;
		border-radius: 8px;
	}

	/* Fix Pagination Link Colors (Uses Elementor Global Colors) */
	.post-pagination,
	.post-pagination a,
	.post-pagination strong {
		color: var(--e-global-color-primary, #333333) !important; 
		text-decoration: none;
	}
	.post-pagination a:hover,
	.post-pagination a:hover strong {
		color: var(--e-global-color-accent, #000000) !important; 
		text-decoration: underline;
	}

	/* Tag Styles & Color Fixes */
	.post-tags {
		margin-top: 30px;
		padding-top: 15px;
		border-top: 1px solid #eee;
	}
	.post-tags, 
	.post-tags a, 
	.post-tags span {
		color: #333333 !important; 
		text-decoration: none;
	}
	.post-tags a:hover {
		color: #000000 !important;
		text-decoration: underline;
	}

	/* Sidebar Styles & Color Fixes */
	.sidebar-widget {
		margin-bottom: 35px;
		padding: 25px;
		background: #fdfdfd;
		border: 1px solid #eaeaea;
		border-radius: 8px;
	}
	.sidebar-widget h3 {
		margin-top: 0;
		margin-bottom: 15px;
		font-size: 20px;
		border-bottom: 2px solid #333;
		padding-bottom: 10px;
		display: inline-block;
	}
	.sidebar-widget ul {
		list-style: none;
		padding: 0;
		margin: 0;
	}
	.sidebar-widget ul li {
		margin-bottom: 12px;
		border-bottom: 1px dashed #ccc;
		padding-bottom: 8px;
	}
	.sidebar-widget ul li:last-child {
		border-bottom: none;
	}
	
	/* Social Media Icons */
	
	.social-links {
		display: flex;
		flex-wrap: wrap;
		gap: 15px; /* Adds nice spacing between icons */
	}
	.social-links a {
		display: inline-block;
		font-size: 24px; /* Makes the icons larger */
		color: var(--e-global-color-primary, #333333) !important;
		text-decoration: none !important;
		transition: all 0.3s ease; /* Smooth color change on hover */
	}
	.social-links a:hover {
		color: var(--e-global-color-accent, #000000) !important;
		transform: translateY(-3px); /* Optional: makes the icon 'pop' up slightly on hover */
	}
	
	.sidebar-widget a {
		color: #333333 !important;
		text-decoration: none;
	}
	.sidebar-widget a:hover {
		color: #000000 !important;
		text-decoration: underline;
	}
	
	/* Search Form Colors and Layout */
	.sidebar-widget .search-form {
		display: flex;
		gap: 10px;
		margin-top: 10px;
	}
	.sidebar-widget .search-field {
		border: 1px solid #cccccc !important;
		border-radius: 5px;
		padding: 10px 15px;
		color: #333333;
		width: 100%;
		outline: none;
	}
	.sidebar-widget .search-field:focus {
		border-color: var(--e-global-color-primary, #000000) !important;
	}
	.sidebar-widget .search-submit {
		background-color: var(--e-global-color-primary, #000000) !important;
		border: none !important;
		color: #ffffff !important;
		border-radius: 5px;
		padding: 10px 20px;
		cursor: pointer;
		font-weight: bold;
		transition: all 0.3s ease;
	}
	.sidebar-widget .search-submit:hover {
		background-color: var(--e-global-color-accent, #333333) !important;
		transform: translateY(-2px);
	}

	/* Responsive mobile layout */
	@media (max-width: 768px) {
		.single-main-content, .single-sidebar {
			flex: 1 1 100%;
			max-width: 100%;
		}
	}
</style>

<div class="single-post-wrapper">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<!-- LEFT SIDE: MAIN POST CONTENT -->
		<main id="content" <?php post_class( 'site-main single-main-content' ); ?>>

			<!-- Featured Image -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-featured-image">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
			<?php endif; ?>

			<!-- Title -->
			<div class="post-header-custom">
				<!-- 1. The Title -->
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
				<!-- 2. Date and Author -->
				<div class="post-meta">
					<?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?>
				</div>
			</div>

			<!-- Post Details (Content) -->
			<div class="page-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>

			<!-- Tags -->
			<?php if ( has_tag() ) : ?>
				<div class="post-tags">
					<?php the_tags( '<span class="tag-links"><strong>' . esc_html__( 'Tags: ', 'hello-elementor' ) . '</strong>', ', ', '</span>' ); ?>
				</div>
			<?php endif; ?>

			<!-- Previous / Next Post Pagination -->
			<div class="post-pagination">
				<div class="nav-previous">
					<?php previous_post_link( '<strong>&larr; Previous Post</strong><br>%link' ); ?>
				</div>
				<div class="nav-next" style="text-align: right;">
					<?php next_post_link( '<strong>Next Post &rarr;</strong><br>%link' ); ?>
				</div>
			</div>

			<!-- Comments -->
			<?php comments_template(); ?>

		</main>

		<?php
	endwhile;
	?>

	<!-- RIGHT SIDE: SIDEBAR -->
	<?php get_sidebar(); ?>

</div> <!-- End .single-post-wrapper -->