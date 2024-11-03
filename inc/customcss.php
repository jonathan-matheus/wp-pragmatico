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
            <?= get_theme_mod('set_cores') ?>
        ;
    }

    nav ul li a {
        color:
            <?= get_theme_mod('set_text_main_cores') ?>
        ;
        transition: 0.5s;
    }

    nav ul li a:hover {
        color:
            <?= get_theme_mod('set_text_hover_main_cores') ?>
        ;
    }

    #button_header a {
        color:
            <?= get_theme_mod('set_text_button_cores') ?>
        ;
        background-color:
            <?= get_theme_mod('set_button_background_cores') ?>
        ;
        transition: 0.5s;
    }

    #button_header a:hover {
        color:
            <?= get_theme_mod('set_text_hover_button_cores') ?>
        ;
        background-color:
            <?= get_theme_mod('set_button_hover_background_cores') ?>
        ;
    }
</style>