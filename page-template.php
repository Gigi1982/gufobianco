<?php /* Template Name: Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-main">
            <div class="page-slideshow">
                <?php if(have_rows('main_gallery')): ?>
                <ul id="lightSlider">
                    <?php while (have_rows('main_gallery')) : the_row(); ?>
                    <li data-thumb="<?php the_sub_field('immagine_piccola'); ?>">
                        <img class="img-responsive" src="<?php the_sub_field('immagine_grande'); ?>" />
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="page-main-inner">
                <div class="container">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <header class="text-center">
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                    <?php endwhile; endif; ?>

                </div>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
