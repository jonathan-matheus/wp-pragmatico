<?php
/**
 * Estilos de css que precisam ser customizados. Estes etilos estão sendo 
 * aplicados aqui, pois seus valores vêm da parte de customização ou 
 * personalização do tema.
 */
?>
<style>
    :root {
        --wp_pragmatico_background_color:
            <?= get_theme_mod('set_cores', WP_PRAGMATICO_BACKGROUND_COLOR) ?>
        ;
        --wp_pragmatico_text_main_color:
            <?= get_theme_mod('set_text_main_cores', WP_PRAGMATICO_TEXT_MAIN_COLOR) ?>
        ;
        --wp_pragmatico_text_hover_main_color:
            <?= get_theme_mod('set_text_hover_main_cores', WP_PRAGMATICO_TEXT_HOVER_MAIN_COLOR) ?>
        ;
        --wp_pragmatico_text_button_color:
            <?= get_theme_mod('set_text_button_cores', WP_PRAGMATICO_TEXT_BUTTON_COLOR) ?>
        ;
        --wp_pragmatico_button_background_color:
            <?= get_theme_mod('set_button_background_cores', WP_PRAGMATICO_BUTTON_BACKGROUND_COLOR) ?>
        ;
        --wp_pragmatico_text_hover_button_color:
            <?= get_theme_mod('set_text_hover_button_cores', WP_PRAGMATICO_TEXT_HOVER_BUTTON_COLOR) ?>
        ;
    }
</style>