<?php
get_header();
$text = get_theme_mod('set_text', WP_PRAGMATICO_SET_TEXT);
$text_2 = get_theme_mod('set_text_2', WP_PRAGMATICO_SET_TEXT_2);
$text_description = get_theme_mod('set_text_description', WP_PRAGMATICO_SET_TEXT_DESCRIPTION);
$text_profission = get_theme_mod('set_text_profission', WP_PRAGMATICO_SET_TEXT_PROFESSION);
$button_download_text = get_theme_mod('con_botao_download_text', WP_PRAGMATICO_BUTTON_DOWNLOAD);
$button_download_link = get_theme_mod('con_botao_download_link', WP_PRAGMATICO_LINK);
$sobre_titulo = get_theme_mod('set_text_about', WP_PRAGMATICO_SET_TEXT_ABOUT);
$sobre = get_theme_mod('set_text_about_description', WP_PRAGMATICO_SET_TEXT_ABOUT_DESCRIPTION);
$title_tecnologias = get_theme_mod('set_text_tecnologies_title', WP_PRAGMATICO_SET_TEXT_TECHNOLOGIES_TITLE);
$tecnolgias = get_theme_mod('set_text_technologies', WP_PRAGMATICO_SET_TEXT_TECHNOLOGIES);
?>
<div id="apresentacao">
    <p class="wp_pragmatico_text_main_color font-1-xs"><?php echo $text; ?></p>
    <h1>
        <span class="wp_pragmatico_text_main_color font-1-xxl"><?php echo $text_2; ?></span>
        <br>
        <span class="text-gradient font-1-xxl"><?php echo $text_profission; ?></span>
    </h1>
    <p class="font-2-l c4"><?php echo $text_description; ?></p>
    <a href="<?= $button_download_link; ?>" class="botao_transparente font-1-s"><?= $button_download_text; ?></a>
</div>
<div id="sobre">
    <div class="autor">
        <h2 class="font-1-xl wp_pragmatico_text_main_color"><?= $sobre_titulo; ?></h2>
        <p class="font-2-l c4"><?= $sobre; ?></p>
    </div>
    <div class="tecnologias">
        <h2 class="font-1-xl wp_pragmatico_text_main_color"><?= $title_tecnologias; ?></h2>
        <p class="font-2-l c4"><?= $tecnolgias ?></p>
    </div>
</div>
<?php
get_footer();