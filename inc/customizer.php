<?php
/**
 * TODO: Alterar o nome do arquivo para customizer_color.php. 
 */

/**
 * Define os elementos de cor da sessão de personalização do tema
 * 
 * @param mixed $wp_customize
 * @return void
 */
function wp_pragmatico_customize_sec_cores($wp_customize)
{
    /**
     * Seção de cores do painel de personalisação do temas
     */
    $wp_customize->add_section(
        'sec_cores',
        [
            'title' => __('Color', 'wp-pragmatico')
        ]
    );

    /**
     * Configuração de cor de fundo do tema
     */
    $wp_customize->add_setting(
        'set_cores',
        [
            'default' => '#000000'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_cores',
            [
                'label' => __('Background Color', 'wp-pragmatico'),
                'section' => 'sec_cores',
                'settings' => 'set_cores'
            ]
        )
    );


    /**
     * Configuração de cor de texto principal
     */
    $wp_customize->add_setting(
        'set_text_main_cores',
        [
            'default' => '#ffffff'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_text_main_cores',
            [
                'label' => __('Main Text Color', 'wp-pragmatico'),
                'section' => 'sec_cores',
                'settings' => 'set_text_main_cores'
            ]
        )
    );

    // Cor ao passar o mouse
    $wp_customize->add_setting(
        'set_text_hover_main_cores',
        [
            'default' => '#808080'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'con_text_hover_main_cores',
            [
                'label' => __('Main Text Hover Color', 'wp-pragmatico'),
                'section' => 'sec_cores',
                'settings' => 'set_text_hover_main_cores'
            ]
        )
    );
}
add_action('customize_register', 'wp_pragmatico_customize_sec_cores');

/**
 * TODO: Separa a parte do código abaixo em outro arquivo, chamado customizer_button.php
 */

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
            'title' => __('Button', 'wp-pragmatico')
        ]
    );

    // Texto do botão
    $wp_customize->add_setting(
        'set_text_button',
        [
            'default' => 'Button'
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
            'default' => '#'
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
            'default' => '#000000'
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
            'default' => '#ffffff'
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
            'default' => '#ffffff'
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
            'default' => '#808080'
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
}
add_action('customize_register', 'wp_pragmatico_customize_sec_button');