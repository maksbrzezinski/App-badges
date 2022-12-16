<?php get_header(); ?>

<?php if ( have_posts() ){
    while ( have_posts() ){
        the_post(); ?>

        <?php
            //Get component
            get_template_part('components/front-page', 'main-component');
        ?>

<?php } } ?>

<?php get_footer(); ?>