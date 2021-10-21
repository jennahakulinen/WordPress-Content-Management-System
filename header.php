<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts/foundation-icons.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-container">
    <header class="tummanpunainen main-header">
        <div class="oranssi tunnus"><a href="<?php echo get_home_url(); ?>">Karkkikauppa Oy</a></div>
        <div class="search-block">
        <?php get_search_form(); ?>
        </div>
    </header>
    <div class="banner">
        <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="Banneri">
    </div>
