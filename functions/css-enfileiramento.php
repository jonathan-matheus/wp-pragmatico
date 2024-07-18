<?php
function css_enfileiramento()
{
    wp_enqueue_style(
        'cores',
        get_template_directory_uri() . '/css/cores.css',
        [],
        '0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'css_enfileiramento');