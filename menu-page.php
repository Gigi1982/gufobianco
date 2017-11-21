<?php /* Template Name: Menu Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-main">
            <div class="page-main-inner">
                <div class="container">
                    <h2 class="h1 text-center">la nostra carta</h2>
                    <div class="menu-bg menu-item big">
                        <h4>La nostra carta</h4>
                        <?php if(have_rows('menu_la_carta')): ?>
                        <?php while (have_rows('menu_la_carta')) : the_row(); ?>
                            <div class="menu-row">
                                <?php echo $indexBlocco; ?>
                                <span class="plate-name"><?php the_sub_field('nome_piatto'); ?></span>
                                <span class="price"><?php the_sub_field('prezzo_piatto'); ?> <span>€</span></span>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
                        <?php if(have_rows('menu_la_carta_nascosto')): ?>
                            <div style="display:none;" class="menu-hidden">
                                <?php while (have_rows('menu_la_carta_nascosto')) : the_row(); ?>
                                <div class="menu-row">
                                    <span class="plate-name"><?php the_sub_field('nome_piatto'); ?></span>
                                    <span class="price"><?php the_sub_field('prezzo_piatto'); ?> <span>€</span</span>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <a href="#" class="menu-reveal">reveal</a>
                        <?php endif; ?>
                    </div>
                    <?php if(have_rows('menu_aggiuntivi')): ?>            
                    <h2 class="h1 text-center">proposte menù</h2>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="menu-bg menu-item">
                                <h4>Menu #1</h4>
                                <img class="img-responsive" src="http://lorempixel.com/300/200/sports/1">
                            </div>
                        </div>            
                    </div>
                    <?php endif; ?>
                </div>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
