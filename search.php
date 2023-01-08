<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cleo
 */

if ( !wp_doing_ajax()) { 
	get_header();
}
?>

	<main id="primary" class="site-main container mt-5">
		<div class="content-row row">
			<div class="<?php echo ( is_active_sidebar('search-widgets') ) ?  'col-lg-8' : 'col-lg-11'; ?>">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'cleopress' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php 
			
			cleo_numeric_posts_nav();
			
			cleo_infinite_load_more();
			
			?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', "post" );

			endwhile;

			cleo_numeric_posts_nav();

			cleo_infinite_load_more();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>

			<?php if( is_active_sidebar('search-widgets') && !wp_doing_ajax() ) { ?>
				<!-- Side widgets-->
				<div class="col-lg-4">
					<div class="sticky-md-top">
					<?php dynamic_sidebar('search-widgets'); ?>
				</div></div>
				<!-- /widgets-container -->
			<?php } ?>
		</div>

	</main><!-- #main -->

<?php
if ( !wp_doing_ajax()) { 
	get_footer();
}
