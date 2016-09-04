<?php get_header(); ?>

<?php while (have_posts()) :
the_post(); ?>

<div class="quarry-header-image-background fixed"></div>
<div class="quarry-header-image fixed"
     style=" background: url(<?php the_field('imagen_de_cabecera'); ?>) center bottom no-repeat; background-size: cover;">
         <div class="dark"></div>
     </div>

<div class="title fixed"><?php the_title(); ?></div>
<div id="menu-icon" class="fixed menu-icon">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>
<main id="panel">
    <div class="page-content-wrapper">
        <div class="padding-top"></div>
        <div class="text"><?php the_field('descripcion'); ?></div>

            <div class="mision-vision" id="mision" style=" background: url(<?php the_field('imagen_de_mision'); ?>) center center no-repeat; background-size: cover;">
                <div class="dark"></div>
                <img src="/wp-content/themes/rex/img/mision_title.svg" />
                <div class="text"><?php the_field('mision'); ?>
                </div>
            </div>
            <div class="mision-vision" id="vision" style=" background: url(<?php the_field('imagen_de_vision'); ?>) center center no-repeat; background-size: cover;">
                <div class="dark"></div>
                <img src="/wp-content/themes/rex/img/vision_title.svg" />
                <div class="text"><?php the_field('vision'); ?></div>
            </div>

            <div class="subtitle">NUESTRO COMPROMISO</div>

            <div class="text last"><?php the_field('nuestro_compromiso'); ?></div>
        <?php the_content(); ?>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>

        <?php get_footer(); ?>
