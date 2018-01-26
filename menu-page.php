<?php /* Template Name: Menu Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-main">
            <div class="page-main-inner">
                <div class="container">
                    <h2 class="h1 text-center transitioned-element">la nostra carta</h2>
                    <div class="menu-bg menu-item big transitioned-element">
                        <h4>La nostra carta</h4>
                        <?php if(have_rows('menu_la_carta')): ?>
                        <?php while (have_rows('menu_la_carta')) : the_row(); ?>
                            <div class="menu-row">
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
                                    <span class="price"><?php the_sub_field('prezzo_piatto'); ?> <span>€</span></span>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="text-right">
                                <a href="#" class="text-right menu-reveal">scopri il nostro menù<i class="icon icon-up-open"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if(have_rows('menu_aggiuntivi')): ?>  
                    <div class="menu-description text-center transitioned-element">
                        <h2 class="h1">proposte menù</h2>
                        <p>Il ristorante effettua servizio alla carta<br>
    Di seguito, alcune proposte menù per gruppi di almeno quindici persone</p>
                    </div>
                    
                    <div class="row">
                        <?php while (have_rows('menu_aggiuntivi')) : the_row(); ?>
                        <div class="col-sm-6 col-md-4 transitioned-element">
                            <div class="menu-bg menu-item">
                                <h4><?php the_sub_field('titolo_menu'); ?></h4>
                                <span class="h4"><?php the_sub_field('sottotitolo_menu'); ?></span>
<!--
                                <div class="menu-item-img">
                                    <img class="img-responsive" src="<?php // the_sub_field('immagine_menu'); ?>">
                                </div>
-->
                                <div class="menu-item-text">
                                    <?php the_sub_field('testo_menu'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
