<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_theme_mod('sitename', 'PT Biomedikal Indopharm Nusantara'); ?> | <?php echo get_theme_mod('description', 'Distributor Alat Kesehatan Yang Tepat & Akurat.'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" style="top: <?php if (is_user_logged_in()) { echo '30px'; } else { echo '0'; } ?>">
        <nav class="container">
            <a href="<?php bloginfo('url'); ?>" class="navbar-brand"><?php echo get_theme_mod('sitename', 'PT Biomedikal Indopharm Nusantara'); ?></a>
            <?php
            $args = array('theme_location' => 'main_menu');
            wp_nav_menu($args);
            ?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="dashicons dashicons-menu-alt" id="openNavigation" onclick="buttonNavigation('open')"></i>
                <i class="dashicons dashicons-no-alt" id="closeNavigation" onclick="buttonNavigation('close')" style="display: none;"></i>
            </a>
        </nav>
    </header>