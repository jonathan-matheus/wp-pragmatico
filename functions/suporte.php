<?php
function wp_pragmatico_suporte()
{
    $args_theme_supports = [
        'custom-logo',
        'post-thumbnails'
    ];

    foreach ($args_theme_supports as $suporte) {
        add_theme_support($suporte);
    }
}
add_action('after_setup_theme', 'wp_pragmatico_suporte');