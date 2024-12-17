<?php
/**
 * Lista de valores padrões de cor e texto do tema
 */

// CORES PADROES
$cores_padroes = [
    'WP_PRAGMATICO_BACKGROUND_COLOR' => '#000000',
    'WP_PRAGMATICO_TEXT_MAIN_COLOR' => '#ffffff',
    'WP_PRAGMATICO_TEXT_HOVER_MAIN_COLOR' => '#808080',
    'WP_PRAGMATICO_TEXT_BUTTON_COLOR' => '#000000',
    'WP_PRAGMATICO_TEXT_HOVER_BUTTON_COLOR' => '#ffffff',
    'WP_PRAGMATICO_BUTTON_BACKGROUND_COLOR' => '#ffffff',
    'WP_PRAGMATICO_BUTTON_HOVER_BACKGROUND_COLOR' => '#808080'
];

foreach ($cores_padroes as $key => $value) {
    define($key, $value);
}

// TEXTOS PADROES
$textos_padroes = [
    'WP_PRAGMATICO_BUTTON_DOWNLOAD' => 'Button Download',
    'WP_PRAGMATICO_TEXT_BUTTON' => 'Button Nav Menu',
    'WP_PRAGMATICO_LINK' => '#',
    'WP_PRAGMATICO_SET_TEXT' => 'Hello, I am',
    'WP_PRAGMATICO_SET_TEXT_2' => 'Goku',
    'WP_PRAGMATICO_SET_TEXT_PROFESSION' => 'Programmer',
    'WP_PRAGMATICO_SET_TEXT_DESCRIPTION' => 'I am a web developer.',
    'WP_PRAGMATICO_SET_TEXT_ABOUT' => 'Sobre',
    'WP_PRAGMATICO_SET_TEXT_ABOUT_DESCRIPTION' => 'Desenvolvedor web com mais de 5 anos de experiência',
    'WP_PRAGMATICO_SET_TEXT_TECHNOLOGIES' => '- C/C++',
    'WP_PRAGMATICO_SET_TEXT_TECHNOLOGIES_TITLE' => 'Tecnologias',
    'WP_PRAGMATICO_SET_TEXT_EXPERIENCE_TITLE' => 'Experiência'
];

foreach ($textos_padroes as $key => $value) {
    define($key, $value);
}