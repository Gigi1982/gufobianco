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
                                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                    <header class="single-news-featured-image">
                                        <?php the_post_thumbnail('news-image', array('class'=> "img-responsive"));?>
                                    </header>
                                <?php endif; ?>
                                <!-- /post thumbnail -->
                                <section class="single-news-container">
                                    <div class="news-content">
                                        <header class="news-content-head">
                                            <div class="date-container"><span class="news-single-date"><?php the_date('d M Y');?></span></div>
                                            <h1 class="news-h1"><?php the_title(); ?></h1>
                                        </header>
                                        <section class="news-content-inner">
                                            <aside class="share-button">
                                                <div href="#" class="rotated-button">NEWS</div>
                                            </aside>
                                            <?php the_content();?>
                                        </section>
                                        <footer class="news-footer">
                                             <!--if previous post exists-->
                                            <?php
                                            $prev_post = get_previous_post();
                                            if (!empty( $prev_post )): ?>
                                            <div class="navigation-left">
                                                <div class="content-navigation">
                                                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="news-links"><i class="svgicons svgicons-back-button"></i></a>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <!--if next post exists-->
                                            <?php
                                            $next_post = get_next_post();
                                            if (!empty( $next_post )): ?>
                                            <div class="navigation-right">
                                                <div class="content-navigation">
                                                    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="news-links"><i class="svgicons svgicons-next-button"></i></a>
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
