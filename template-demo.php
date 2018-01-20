<?php /* Template Name: Contatti Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="contatti-page">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <section class="contact-map">
                            <?php 

                            $locationCont = get_field('mappa');

                            if( !empty($locationCont) ):
                            ?>
                            <div class="acf-map">
                                <div class="marker" data-lat="<?php echo $locationCont['lat']; ?>" data-lng="<?php echo $locationCont['lng']; ?>"></div>
                            </div>
                            <?php endif; ?>
                        </section>

                    </article>
                    <!-- /article -->

                <?php endwhile; ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        <div><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
