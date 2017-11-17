<?php /* Template Name: Home */ get_header(); ?>
    <div class="container">

        <main role="main">
            <!-- section -->
            <section class="padded-content text-center">

                <?php //the_content(); ?>
                <section class="content-boxes border-bottom">
                    <h1 class="biggest">cucina tipica piemontese </h1>
                    <p>Situato nei pressi del ponte Isabella, a pochi metri dalla sponda sinistra del fiume Po, 
Al Gufo Bianco è un ristorante dall’anima elegante e raffinata con un'importante impronta familiare. 
Propone una cucina tradizionale con particolare attenzione ai prodotti del territorio, all’insegna 
della genuinità e con un tocco di creatività.</p>
                </section>
                
                <section class="content-boxes news-listing">
                    <h2 class="h1">NEWS</h2>
                    <ul class="gufo-news-last">
                        <?php
                            global $wp_query, $paged;

                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $HomeArticleArgs = array(
                                //'offset'           => 1,
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
                            xxxxx
                            <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>" title="Read more"><span class="">-</span><?php the_title(); ?></a></h3>
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
                </section>

            </section>
            <!-- /section -->
        </main>
    </div>

<?php get_footer(); ?>
