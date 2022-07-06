<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    
		    <div class="estate_title">Частные дома</div>
		    <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array (
                    'posts_per_page' => 5,
                    'order'      => 'DESC',
                    'post_type'  => array( 'estate' ),
                    'tax_query' => [
                        [
                            'taxonomy' => 'estates',
                            'field'    => 'slug', 
                            'terms'    => 'chactnyi-dom',
                        ]
                    ],
                    'paged' => $paged
                );
            ?>
            
		    <div class="row">
	        <?php
                $MY_QUERY = new WP_Query( $args);
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        		        <div class="col-4">
        		            <div class="estate_item">
        		                <div class="estate_item__img" style="background-image: url('<?php the_field('estate_img'); ?>')"></div>
                                <h4><?php the_title(); ?></h4>
                                <div class="estate_item__block">
                                    <div class="estate_item__ploshad">Площадь: <?php the_field('estate_ploshad'); ?></div>
                                    <div class="estate_item__ploshad">Этажность: <?php the_field('estate_etaj'); ?></div>
                                </div>
                                <div class="estate_item__price">Цена: <span><?php the_field('estate_price'); ?></span></div>
                                <div class="estate_item__link"><a href="<? the_permalink();?>">Подробнее</a></div>
        		            </div>
        		        </div>
		            <?php endwhile;
                endif; ?>
                <?php  wp_reset_postdata(); ?>
		    </div>
		    
		    <div class="estate_title">Квартиры</div>
		    <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array (
                    'posts_per_page' => 5,
                    'order'      => 'DESC',
                    'post_type'  => array( 'estate' ),
                    'tax_query' => [
                        [
                            'taxonomy' => 'estates',
                            'field'    => 'slug', 
                            'terms'    => 'kvartira',
                        ]
                    ],
                    'paged' => $paged
                );
            ?>
            
		    <div class="row">
	        <?php
                $MY_QUERY = new WP_Query( $args);
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        		        <div class="col-4">
        		            <div class="estate_item">
        		                <div class="estate_item__img" style="background-image: url('<?php the_field('estate_img'); ?>')"></div>
                                <h4><?php the_title(); ?></h4>
                                <div class="estate_item__block">
                                    <div class="estate_item__ploshad">Площадь: <?php the_field('estate_ploshad'); ?></div>
                                    <div class="estate_item__ploshad">Этажность: <?php the_field('estate_etaj'); ?></div>
                                </div>
                                <div class="estate_item__price">Цена: <span><?php the_field('estate_price'); ?></span></div>
                                <div class="estate_item__link"><a href="<? the_permalink();?>">Подробнее</a></div>
        		            </div>
        		        </div>
		            <?php endwhile;
                endif; ?>
                <?php  wp_reset_postdata(); ?>
		    </div>
		    
		    <div class="estate_title">Офисы</div>
		    <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array (
                    'posts_per_page' => 5,
                    'order'      => 'DESC',
                    'post_type'  => array( 'estate' ),
                    'tax_query' => [
                        [
                            'taxonomy' => 'estates',
                            'field'    => 'slug', 
                            'terms'    => 'ofisnie-pomewenia',
                        ]
                    ],
                    'paged' => $paged
                );
            ?>
            <div class="row">
                <?php
                    $MY_QUERY = new WP_Query( $args);
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <div class="col-4">
            		            <div class="estate_item">
            		                <div class="estate_item__img" style="background-image: url('<?php the_field('estate_img'); ?>')"></div>
                                    <h4><?php the_title(); ?></h4>
                                    <div class="estate_item__block">
                                        <div class="estate_item__ploshad">Площадь: <?php the_field('estate_ploshad'); ?></div>
                                        <div class="estate_item__ploshad">Этажность: <?php the_field('estate_etaj'); ?></div>
                                    </div>
                                    <div class="estate_item__price">Цена: <span><?php the_field('estate_price'); ?></span></div>
                                    <div class="estate_item__link"><a href="<? the_permalink();?>">Подробнее</a></div>
            		            </div>
            		        </div>
                        <?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>
        </main>
    </div>
<?php get_footer(); ?>
