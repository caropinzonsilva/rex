<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:app_id" content="101238896987126"/>
    <meta property="og:url" content="http://www.jinetescolombianos.org"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Jinetes Colombianos"/>
    <meta property="og:description" content="Participación en Concursos Nacionales (FEC) e Internacionales (FEI)"/>
    <meta property="og:image" content="http://www.jinetescolombianos.org/img/facebook_preview.png"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav id="menu">
    <header>
        <a href="/">
            <?php $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
            <img src="<?php echo $image[0]; ?>" class="rex-logo"/>
        </a>
        <div class="options">
            <?php wp_nav_menu(array('container_class' => 'options', 'theme_location' => 'main-menu')); ?>
        </div>
        <div class="info">
            <div>CRA 27 # 47A - 35</div>
            <div>TEL: (571) 337 87 26/28/56</div>
            <div>FAX: (571) 335 35 30</div>
            <div>info@rexingenieria.com</div>
            <div>BOGOTÁ D.C - COLOMBIA</div>
        </div>
    </header>
</nav>
<div id="menu-icon" class="fixed">
    <svg viewBox="0 0 24 24">
        <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
    </svg>
</div>