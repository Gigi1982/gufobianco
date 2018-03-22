<?php /* Template Name: Home */ get_header(); ?>
    <section class="front-intro">
        <?php include("inc/intro.php");?>
    </section>
    <div class="container">

        <main role="main">
            <!-- section -->
            <section class="padded-content text-center">
                
                <section class="content-boxes border-bottom transitioned-element">
                    <h1 class="biggest"><?php echo get_field('titolo_principale'); ?></h1>
                    <div><?php echo get_field('descrizione_principale'); ?></div>
                </section>
                <?php if (get_field('descrizione_secondaria')) : ?>
                <section class="content-boxes border-bottom transitioned-element">
                    <h2 class="biggest"><?php echo get_field('titolo_secondario'); ?></h2>
                    <div><?php echo get_field('descrizione_secondaria'); ?></div>
                </section>
                <?php endif; ?>
                <section class="content-boxes news-listing">
                    <h2 class="h2 transitioned-element">News</h2>
                    <ul class="gufo-news-last">
                        <?php
                            global $wp_query, $paged;

                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $HomeArticleArgs = array(
                                //'offset'           => 1,
                                'meta_query' => array(
                                    array(
                                        'key' => 'feature', // name of custom field
                                        'value' => '"featured"', // matches exactly "featured"
                                        'compare' => 'LIKE'
                                    )
                                ),
                                'posts_per_page'   => 3,
                                'post_type'        => 'post',
                                'post_status'      => 'publish',
                                'suppress_filters' => true,
                                'order' => 'ASC'
                            );
                            $HomeArticleQuery = new WP_Query( $HomeArticleArgs );                  
                        ?>

                        <?php if ($HomeArticleQuery ->have_posts()): while ($HomeArticleQuery ->have_posts()) : $HomeArticleQuery ->the_post(); ?>
                        <li>
                            <!-- post thumbnail -->
                            <?php 
                            $templateUrl = get_template_directory_uri();
                            $bg = get_the_post_thumbnail_url();
                            if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                            
                            <?php endif; ?>
                            <a data-lightboxTarget="#news-article" href="<?php the_permalink(); ?>" title="Read more">
                                <h3 class="transitioned-element"><span style="display:none;" class="">-</span><?php the_title(); ?></h3>
                                <div class="news-img-container embed-responsive embed-responsive-square">
                                    <img class="embed-responsive-item" src="<?php the_field('anteprima_evento'); ?>">
                                </div>
                            </a>
                            <?php //if(get_field('news_testo')): ?>
                            <div>
                                <?php //the_field('news_testo'); ?>
                                <?php //echo html5wp_excerpt('html5wp_index') ?>
                            </div>
                            <?php //endif; ?> 
                        </li>
                        <?php endwhile; ?> 
                        <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                    </ul>
                    <ul class="last-three-news-images list-unstyled">
                        <?php
                            //global $wp_query, $paged;

                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $QueryImagesArgs = array(
                                'meta_query' => array(
                                    array(
                                        'key' => 'feature', // name of custom field
                                        'value' => '"featured"', // matches exactly "featured"
                                        'compare' => 'LIKE'
                                    )
                                ),
                                'posts_per_page'   => 3,
                                'post_type'        => 'post',
                                'post_status'      => 'publish',
                                'suppress_filters' => true,
                                'order' => 'ASC'
                            );
                            $HomeImagesQuery = new WP_Query( $QueryImagesArgs  );                  
                        ?>

                        <?php //if ($HomeImagesQuery ->have_posts()): while ($HomeImagesQuery ->have_posts()) : $HomeImagesQuery ->the_post(); ?>
                            <!-- post thumbnail -->
                            <?php 
                            //$templateUrl = get_template_directory_uri();
                            //$bg = get_the_post_thumbnail_url($post_id, array(150,150));
                            //if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
<!--                                <li class="transitioned-element"><img src="<?php //echo $bg; ?>"></li>-->
                            <?php //endif; ?>
                        
                        <?php //endwhile; ?> 
                        <?php //wp_reset_postdata(); ?>
                        
                        <?php// endif; ?>
                    </ul>
                </section>

            </section>
            <!-- /section -->
        </main>
        <div class="news-popup-container popup-container">
            <div class="container">
            <!-- ajax -->
            </div>
        </div>
    </div>

<?php get_footer(); ?>
