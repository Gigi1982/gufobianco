<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="category-listing">
            <div class="container">
                <h1><?php single_cat_title(); ?></h1>

                <div class="row">
                     <?php
                            global $wp_query, $paged;

                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $EventiArticleArgs = array(
                                //'offset'           => 1,
                                'category_name'  => 'eventi',
                                'post_type'        => 'post',
                                'post_status'      => 'publish',
                                'suppress_filters' => true,
                                'order' => 'ASC'
                            );
                            $EventiArticleQuery = new WP_Query( $EventiArticleArgs );                  
                        ?>

                        <?php if ($EventiArticleQuery ->have_posts()): while ($EventiArticleQuery ->have_posts()) : $EventiArticleQuery ->the_post(); ?>
                        <?php $featuredImageUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
                        <?php $url = $featuredImageUrl['0']; ?>
                        <div class="col-md-3">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <a data-lightboxTarget="#news-article" href="<?php the_permalink(); ?>" title="Read more">
                                    <!-- post title -->
                                    <h3><?php the_title(); ?></h3>
                                    <?php if( get_field('data_evento') ): ?>
                                        <span class="event-date"><?php the_field('data_evento'); ?></span>
                                    <?php endif; ?>
                                    <!-- /post title -->

                                    <!-- post thumbnail -->
                                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                        <div class="news-img-container"><img class="img-responsive" src="<?php echo $url; ?>"></div>
                                    <?php endif; ?>
                                    <!-- /post thumbnail -->

                                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                                </a>
                            </article>
                        </div>
                        <?php endwhile; ?> 
                        <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                
                </div>
            </div>
		</section>
		<!-- /section -->
        <div class="news-popup-container popup-container">
            <div class="container">
            <!-- ajax -->
            </div>
        </div>
	</main>

<?php get_footer(); ?>
