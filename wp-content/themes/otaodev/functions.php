<?php
if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

function seu_tema_setup() {
    // Adiciona suporte ao título
    add_theme_support('title-tag');
    
    // Adiciona suporte ao logotipo personalizado
    add_theme_support('custom-logo', array(
        'height'               => 100,
        'width'                => 300,
        'flex-height'          => true,
        'flex-width'           => false,
        'header-text'          => array('site-title', 'site-description'),
    ));
    
    // Adiciona suporte a miniaturas
    add_theme_support('post-thumbnails');
    
    // Registra menu principal
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'otaodev'),
    ));
}
add_action('after_setup_theme', 'seu_tema_setup');

// Registra scripts e estilos
function seu_tema_scripts() {
    wp_enqueue_style('otaodev-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('otaodev-sass', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
    wp_enqueue_script('otaodev-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'seu_tema_scripts');