<?php
/**
 * Efileiramento de arquivos js
 * 
 * @return void
 */
function enqueue_scripts()
{
    // Script de menu mobile
    wp_enqueue_script(
        'mobile_menu',
        get_template_directory_uri() . '/js/mobile_menu.js',
        [],
        '0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');