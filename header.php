<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="bg-light py-2">
    <div class="container-fluid d-flex justify-content-between align-items-center" style="background-color: #007bff; color: white;">
        <div class="date-time"><?php echo date_i18n('F j, Y g:i A'); ?></div>
        <div class="social-links">
            <a href="<?php echo get_theme_mod('facebook_link', '#'); ?>" class="text-white me-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="<?php echo get_theme_mod('twitter_link', '#'); ?>" class="text-white me-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="<?php echo get_theme_mod('instagram_link', '#'); ?>" class="text-white me-2">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="<?php echo get_theme_mod('linkedin_link', '#'); ?>" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-between align-items-center mt-3">
        <div class="logo"><?php the_custom_logo(); ?></div>
        <div class="header-ads"><?php dynamic_sidebar('header-ads'); ?></div>
    </div>
</header>
<?php get_template_part('template-parts/navbar'); ?>
