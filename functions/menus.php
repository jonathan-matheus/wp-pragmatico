<?php
function wp_pragmatico_menus()
{
    register_nav_menus(
        [
            'main-menu' => esc_html__('Main menu', 'wp-pragmatico'),
        ]
    );
}
add_action('init', 'wp_pragmatico_menus');