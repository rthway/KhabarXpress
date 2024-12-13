<?php
// Enqueue scripts and styles
function khabarxpress_enqueue_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    // Enqueue Bootstrap Icons CSS
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css', array(), null );


}
add_action('wp_enqueue_scripts', 'khabarxpress_enqueue_scripts');

// Theme setup
function khabarxpress_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu', 'khabarxpress'));
    register_nav_menu('social', __('Social Menu', 'khabarxpress'));
    
}
add_action('after_setup_theme', 'khabarxpress_theme_setup');

// Register widget areas
function khabarxpress_widgets_init() {
    register_sidebar(array(
        'name' => __('Header Ads', 'khabarxpress'),
        'id' => 'header-ads',
        'before_widget' => '<div class="header-widget">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'khabarxpress_widgets_init');

function khabarxpress_customize_register($wp_customize) {
    // Social Links
    $wp_customize->add_section('social_links', array(
        'title' => __('Social Links', 'bihani'),
        'priority' => 40,
    ));
    $social_networks = array('facebook', 'twitter', 'instagram', 'linkedin');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting("{$network}_link", array('default' => '#'));
        $wp_customize->add_control("{$network}_link", array(
            'label' => ucfirst($network) . ' URL',
            'section' => 'social_links',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'khabarxpress_customize_register');
