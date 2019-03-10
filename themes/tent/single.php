<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		<?php while ( have_posts() ) : the_post(); ?>

			
			<!---------------------- my edit 10:30am --------------------------->
			<!--<div style=" background: url(<?php the_post_thumbnail_url();?>)">
			<h1><?php the_title(); ?></h1>
			
			<span>
			<?php red_starter_posted_on();?> / <?php red_starter_posted_by();?> / <?php red_starter_comment_count();?>
			</span>
			</div> ---->
			<!------------------------------------------------------------------>


			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>
			


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

