<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="col-md-3">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a data-lightboxTarget="#news-article" href="<?php the_permalink(); ?>" title="Read more">


            <!-- post title -->
            <h3><?php the_title(); ?></h3>
            <!-- /post title -->

            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <?php the_post_thumbnail(array(220,140)); // Declare pixel size you need inside the array ?>
            <?php endif; ?>
            <!-- /post thumbnail -->

            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
            </a>
        </article>
        <!-- /article -->
    </div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
