<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	
    <img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="">
     <img  src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="logo-tag" alt="Inhabitent full logo">

     <!---------------------------------------------------------------- SHOP SECTION ---------------------------------------------------------------->
     <section class="product-info container">
     <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
                     </section>

<!------------------------------------------------------------------ JOURNAL SECTION ---------------------------------------------------------------->

     <section class="journal">
                <?php
                    // Use get_posts to get journal posts
                    $args = array( 'post_type' => 'post', 'posts_per_page' => '3' );
                    $journal_posts = get_posts( $args );
                    if ( ! empty( $journal_posts ) ) :   
                ?>
                        <h2>Inhabitent Journal</h2>
                        <ul class="journal-ul">
                        <?php foreach( $journal_posts as $post) : setup_postdata( $post ); ?>
                            <li class="journal-li">
                                <?php if (has_post_thumbnail() ) : ?>
                                    <div class="thumbnail-wrapper">
                                        <?php the_post_thumbnail('large'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="post-info-wrapper">
                                    <span class="entry-meta"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
                                    <h3 class="entry-title"><?php the_title(); ?></h3>
                                    <a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a>
                                </div>
                            </li>
                        <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                <?php endif; ?>
            </section>
 <!------------------------------------------------------------------ ADENTURES SECTION ----------------------------------------------------------------
 <section class="adventures container">
 <?php
            $args = array( 'post_type' => 'adventures', 'posts_per_page' => '4' );
            $adventures = get_posts( $args );
            //$adventures = inhabitent_get_latest_posts( 'adventure', 4 );
              if ( ! empty( $adventures ) ) :
                 $i = 4;
            ?>
               <h2>Latest Adventures</h2>
               <ul>
               <?php foreach( $adventures as $post ) : setup_postdata( $post ); ?>
                  <li>
                     <div class="story-wrapper">
                        <?php if ( has_post_thumbnail() ) : ?>
                           <?php $i == 1 ? the_post_thumbnail( 'full' ) : the_post_thumbnail( 'large' ); ?>
                        <?php endif; $i++; ?>
                        <div class="story-info">
                           <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                           <a class="white-btn" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                     </div>
                  </li>
               <?php endforeach; ?>
               </ul>
               <p class="see-more">
                  <a href="<?php echo get_post_type_archive_link( 'adventures' ); ?>" class="btn">More Adventures</a>
               </p>
            <?php endif; ?>
                     </section>-->
           
    
         <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

<!--------------------------------------------------------------------------------------->

