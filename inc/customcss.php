<?php
/**
 * Estilos de css que precisam ser customizados. Estes etilos estão sendo 
 * aplicados aqui, pois seus valores vêm da parte de customização ou 
 * personalização do tema.
 */
?>
<style>
    body {
        background-color:
            <?= get_theme_mod('set_cores', WP_PRAGMATICO_BACKGROUND_COLOR) ?>
        ;
    }

    nav ul li a {
        color:
            <?= get_theme_mod('set_text_main_cores', WP_PRAGMATICO_TEXT_HOVER_MAIN_COLOR) ?>
        ;
        transition: 0.5s;
    }

    nav ul li a:hover {
        color:
            <?= get_theme_mod('set_text_hover_main_cores', WP_PRAGMATICO_TEXT_HOVER_MAIN_COLOR) ?>
        ;
    }

    #button_header a {
        color:
            <?= get_theme_mod('set_text_button_cores', WP_PRAGMATICO_TEXT_BUTTON_COLOR) ?>
        ;
        background-color:
            <?= get_theme_mod('set_button_background_cores', WP_PRAGMATICO_BUTTON_BACKGROUND_COLOR) ?>
        ;
        transition: 0.5s;
    }

    #button_header a:hover {
        color:
            <?= get_theme_mod('set_text_hover_button_cores', WP_PRAGMATICO_TEXT_HOVER_BUTTON_COLOR) ?>
        ;
        background-color:
            <?= get_theme_mod('set_button_hover_background_cores', WP_PRAGMATICO_TEXT_HOVER_BUTTON_COLOR) ?>
        ;
    }
</style>