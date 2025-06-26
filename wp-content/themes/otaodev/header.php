<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body class="container" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand image is-3by1">
                <?php 
                if (has_custom_logo()) :
                    the_custom_logo();
                else :
                ?>
                    <a class="navbar-item" href="<?php echo esc_url(home_url('/')); ?>">
                        <h1 class="title is-4"><?php bloginfo('name'); ?></h1>
                    </a>
                <?php endif; ?>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMain">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarMain" class="navbar-menu">
                <div class="navbar-end">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'navbar-item',
                        'container'      => false,
                    ));
                    ?>
                </div>
            </div>
        </div>
    </nav>
</header>
