<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();
    ?>
    <!--
    Estilos de css que precisam ser customizados. Estes etilos estão sendo 
    aplicados aqui, pois seus valores vêm da parte de customização ou 
    personalização do tema.
    -->
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
    </style>
    <header>
        <!-- Logo customizado -->
        <?php
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/logo_padrao.png" alt="logo">';
            }
            ?>
        </a>

        <!-- Menu customizado -->
        <nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
            ]);
            ?>
        </nav>
    </header>