<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>
        <?php bloginfo('name') ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title() ?>
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-md navbar-light bg-light d-flex position-sticky custom-navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Navbar</a>
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
            </div>
        </nav>
        <div class='container'>
            <div class='row'>
                <?php if(is_front_page() || !is_active_sidebar( 'sidebar' )) : ?>
                    <div class='col-12'>
                        <?php if(!is_front_page()) : ?>
                            <div class='page-header'>
                                <h1><?php bloginfo('name'); ?></h1>
                                <p><?php bloginfo('description'); ?></p>
                            </div>
                        <?php endif; ?>
                <?php else : ?>
                    <div class='col-md-3 bg-light'>
                        <div class='position-sticky sidebars'>
                            <?php dynamic_sidebar( 'sidebar' ); ?>
                        </div>
                    </div>
                    <div class='col-md-9'>
                        <div class='page-header'>
                            <h1><?php bloginfo('name'); ?></h1>
                            <p><?php bloginfo('description'); ?></p>
                        </div>
                <?php endif; ?>