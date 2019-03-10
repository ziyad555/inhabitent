<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	

	<div id="primary-about" class="content-area-about">
		<main id="main" class="site-main" role="main">

		<img class="about-hero" src="<?php echo get_template_directory_uri(); ?>/images/about-hero.jpg" alt="">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
