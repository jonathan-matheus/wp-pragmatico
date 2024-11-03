<?php
function wp_pragmatico_suporte()
{
    add_theme_support(
        'custom-logo'
    );
}
add_action('after_setup_theme', 'wp_pragmatico_suporte');