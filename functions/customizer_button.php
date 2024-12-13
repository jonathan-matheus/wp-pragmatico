<?php
/**
 * Define os elementos do botão de ação do cabeçalho do site
 * 
 * @param mixed $wp_customize
 * @return void
 */
function wp_pragmatico_customize_sec_button($wp_customize)
{
    /**
     * Seção de botão do tema
     */
    $wp_customize->add_section(
        'sec_button',
        [
            'title' => __(WP_PRAGMATICO_TEXT_BUTTON, 'wp-pragmatico')
        ]
    );

    // Texto do botão
    $wp_customize->add_setting(
        'set_text_button',
        [
            'default' => WP_PRAGMATICO_TEXT_BUTTON
        ]
    );

    $wp_customize->add_control(
        'con_text_button',
        [
            'label' => __('Button Text', 'wp-pragmatico'),
            'section' => 'sec_button',
            'settings' => 'set_text_button',
            'type' => 'text'
        ]
    );

    // Link do botão
    $wp_customize->add_setting(
        'set_button',
        [
            'default' => WP_PRAGMATICO_LINK
        ]
    );

    $wp_customize->add_control(
        'con_botao',
        [
            'label' => __('Button Link', 'wp-pragmatico'),
            'section' => 'sec_button',
            'settings' => 'set_button',
            'type' => 'text'
        ]
    );

    // Cor do texto do botão
    $wp_customize->add_setting(
        'set_text_button_cores',
        [
            'default' => WP_PRAGMATICO_TEXT_BUTTON_COLOR
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_text_button_cores',
            [
                'label' => __('Button Text Color', 'wp-pragmatico'),
                'section' => 'sec_button',
                'settings' => 'set_text_button_cores'
            ]
        )
    );

    // Cor do texto do botão ao passar o mouse
    $wp_customize->add_setting(
        'set_text_hover_button_cores',
        [
            'default' => WP_PRAGMATICO_TEXT_HOVER_BUTTON_COLOR
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_text_hover_button_cores',
            [
                'label' => __('Button Text Hover Color', 'wp-pragmatico'),
                'section' => 'sec_button',
                'settings' => 'set_text_hover_button_cores'
            ]
        )
    );

    // Cor de fundo do botão
    $wp_customize->add_setting(
        'set_button_background_cores',
        [
            'default' => WP_PRAGMATICO_BUTTON_BACKGROUND_COLOR
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_botao_background_cores',
            [
                'label' => __('Button Background Color', 'wp-pragmatico'),
                'section' => 'sec_button',
                'settings' => 'set_button_background_cores'
            ]
        )
    );

    // Cor de fundo do botão ao passar o mouse
    $wp_customize->add_setting(
        'set_button_hover_background_cores',
        [
            'default' => WP_PRAGMATICO_BUTTON_HOVER_BACKGROUND_COLOR
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_botao_hover_background_cores',
            [
                'label' => __('Button Background Hover Color', 'wp-pragmatico'),
                'section' => 'sec_button',
                'settings' => 'set_button_hover_background_cores'
            ]
        )
    );

    $wp_customize->add_section(
        'sec_button_download',
        [
            'title' => __(WP_PRAGMATICO_BUTTON_DOWNLOAD, 'wp-pragmatico')
        ]
    );

    // Botão download curriculo
    $wp_customize->add_setting(
        'set_button_download_setting',
        [
            'default' => WP_PRAGMATICO_BUTTON_DOWNLOAD
        ]
    );

    // Texto interno do botão
    $wp_customize->add_control(
        'con_botao_download',
        [
            'label' => __('Button Text', 'wp-pragmatico'),
            'section' => 'sec_button_download',
            'settings' => 'set_button_download_setting',
            'type' => 'text'
        ]
    );

    // Link do botão
    $wp_customize->add_setting(
        'set_button_download_link',
        [
            'default' => WP_PRAGMATICO_LINK
        ]
    );

    $wp_customize->add_control(
        'con_botao_download_link',
        [
            'label' => __('Button Link', 'wp-pragmatico'),
            'section' => 'sec_button_download',
            'settings' => 'set_button_download_link',
            'type' => 'text'
        ]
    );


}
add_action('customize_register', 'wp_pragmatico_customize_sec_button');