<?php
/**
 * inc/default_values - Lista de valores padrões de cor e texto do tema
 * functions/customizer_colors - Define os elementos de cor da sessão de personalização do tema
 * functions/customizer_button - Define os elementos de botão da sessão de personalização do tema
 * functions/css_queuing - Cadastra os arquivos CSS do tema
 * functions/suporte - Define as funções suportadas pelo tema
 * functions/menu - Define os menus do tema
 * functions/js_queuing - Cadastra os arquivos JS do tema
 */
$files = [
    'default_values.php',
    'functions/customizer_colors.php',
    'functions/customizer_button.php',
    'functions/css_queuing.php',
    'functions/suporte.php',
    'functions/menus.php',
    'functions/js_queuing.php',
    'functions/customizer_text.php',
    'functions/tipos_posts.php'
];

$directory = get_template_directory();

foreach ($files as $file) {
    if (file_exists($directory . '/' . $file)) {
        require_once $directory . '/' . $file;
    }
}