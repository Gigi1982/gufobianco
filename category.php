<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="category-listing">
            <div class="container">
                <h1><?php single_cat_title(); ?></h1>

                <div class="row"><?php get_template_part('loop'); ?></div>
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
