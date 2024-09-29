<?php
/**
 * Define os elementos de personalização do tema
 */
function wp_pragmatico_customize($wp_customize)
{
    /**
     * Seção de botão do tema
     */
    $wp_customize->add_section(
        'sec_botao',
        [
            'title' => __('Button', 'wp-pragmatico')
        ]
    );

    $wp_customize->add_setting(
        'set_botao',
        [
            'default' => '#'
        ]
    );

    $wp_customize->add_control(
        'con_botao',
        [
            'label' => __('Button Link', 'wp-pragmatico'),
            'section' => 'sec_botao',
            'settings' => 'set_botao',
            'type' => 'text'
        ]
    );

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

add_action('customize_register', 'wp_pragmatico_customize');