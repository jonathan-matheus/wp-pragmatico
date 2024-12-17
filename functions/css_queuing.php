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
    $arquivos_css = [
        'header' => '/css/header.css',
        'fonts' => '/css/fonts.css',
        'mobile_menu' => '/css/mobile_menu.css',
        'general' => '/css/general.css',
        'cores' => '/css/colors.css',
        'home' => '/css/home.css',
        'sobre' => '/css/sobre.css'
    ];

    foreach ($arquivos_css as $key_arquivo => $value_arquivo) {
        wp_enqueue_style(
            $key_arquivo,
            get_template_directory_uri() . $value_arquivo,
            [],
            '0.0',
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'css_enfileiramento');