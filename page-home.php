<?php
get_header();
// Observação a cor do texto e preta, por isso não da para ver na tela
$set_text = get_theme_mod('set_text', WP_PRAGMATICO_SET_TEXT);
$set_text_2 = get_theme_mod('set_text_2', WP_PRAGMATICO_SET_TEXT_2);
$set_text_description = get_theme_mod('set_text_description', WP_PRAGMATICO_SET_TEXT_DESCRIPTION);
$set_text_profission = get_theme_mod('set_text_profission', WP_PRAGMATICO_SET_TEXT_PROFESSION);
$set_button_download_text = get_theme_mod('con_botao_download_text', WP_PRAGMATICO_BUTTON_DOWNLOAD);
$set_button_download_link = get_theme_mod('con_botao_download_link', WP_PRAGMATICO_LINK);
?>
<div id="apresentacao">
    <p class="wp_pragmatico_text_main_color font-1-xs"><?php echo $set_text; ?></p>
    <h1>
        <span class="wp_pragmatico_text_main_color font-1-xxl"><?php echo $set_text_2; ?></span>
        <br>
        <span class="text-gradient font-1-xxl"><?php echo $set_text_profission; ?></span>
    </h1>
    <p class="font-2-l c4"><?php echo $set_text_description; ?></p>
    <a href="<?= $set_button_download_link; ?>"
        class="botao_transparente font-1-s"><?= $set_button_download_text; ?></a>
</div>
<?php
get_footer();