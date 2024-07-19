<?php

/**
 * Enfileiramento de arquivos CSS
 * 
 * Enfieliras o arquivo css cores.css, alem de adicionar a propriedade de cor 
 * de fundo
 * @return void
 */
function css_enfileiramento()
{
    // Enfileira o arquivo de cores
    wp_enqueue_style(
        'cores',
        get_template_directory_uri() . '/css/cores.css',
        [],
        '0.0',
        'all'
    );

    // Adiciona a propriedade de cor de fundo
    wp_add_inline_style(
        'cores',
        'body { background-color: ' . get_theme_mod('sec_cores') . '}'
    );
}
add_action('wp_enqueue_scripts', 'css_enfileiramento');