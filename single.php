<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
        
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            
                <article id="news-article" <?php post_class(); ?>>
                    <div class="container">
                    <!-- custom code -->
                        <div class="news-article-inner">
                        

                        <!-- header -->
                            <header class="close-news-container">
                                <a href="<?php echo get_permalink( get_option('page_for_posts' ));?>" class="close-button"><i class="icon icon-cancel"></i></a>
                            </header>
                            <!-- single news content -->
                            <!-- post thumbnail -->
                            <section class="news-main-fadein">
                                
                                <section class="single-news-container text-center">
                                    <div class="news-content">
                                        
                                        <header class="news-content-head">
<!--                                            <div class="date-container"><span class="news-single-date"><?php //the_date('d M Y');?></span></div>-->
                                            <h1 class="sr-only"><?php the_title(); ?></h1>
                                            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                                <div class="single-news-featured-image">
                                                    <?php the_post_thumbnail('news-image', array('class'=> "img-responsive"));?>
                                                </div>
                                            <?php endif; ?>
                                            <!-- /post thumbnail -->
                                        </header>
                                        <section class="news-content-inner">
                                            <?php if( get_field('data_evento') ): ?>
                                                <span class="event-date"><?php the_field('data_evento'); ?></span>
                                            <?php endif; ?>

                                            <!-- partnership -->
                                            <?php if( get_field('collaborazione_evento') ): ?>
                                                <span class="event-date"><?php the_field('collaborazione_evento'); ?></span>
                                            <?php endif; ?>
                                            <div>
                                                <?php the_content();?>
                                            </div>
                                        </section>
                                        <footer class="news-footer">
                                             <!--if previous post exists-->
                                            <?php
                                            $prev_post = get_previous_post(true);
                                            if (!empty( $prev_post )): ?>
                                            <div class="navigation-left">
                                                <div class="content-navigation">
                                                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="news-links"><span class="hidden-xs">Precedente</span><i class="icon icon-arrow-left"></i></a>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <!--if next post exists-->
                                            <?php
                                            $next_post = get_next_post(true);
                                            if (!empty( $next_post )): ?>
                                            <div class="navigation-right">
                                                <div class="content-navigation">
                                                    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="news-links"><i class="icon icon-arrow-right"></i><span class="hidden-xs">Prossimo</span></a>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </footer>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div>
                </article>
                <!-- /article -->
            
        <?php endwhile; ?>
	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
