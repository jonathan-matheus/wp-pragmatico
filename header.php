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
    require_once(get_template_directory() . '/inc/customcss.php');
    ?>
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
        <div id="menu_header">
            <nav>
                <?php
                wp_nav_menu([
                    'menu_class' => 'font-poppins-0',
                    'theme_location' => 'main-menu',
                ]);
                ?>
            </nav>
            <?php
            $set_button = get_theme_mod('set_button');
            if (isset($set_button)) {
                ?>
                <div id="button_header" class="font-poppins-0">
                    <a href="<?= get_theme_mod('set_button') ?>""><?= get_theme_mod('set_text_button') ?></a>
                </div>
                <?php
            }
            ?>
        </div>
    </header>