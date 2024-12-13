<?php
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
            'default' => WP_PRAGMATICO_BACKGROUND_COLOR
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
            'default' => WP_PRAGMATICO_TEXT_MAIN_COLOR
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
            'default' => WP_PRAGMATICO_TEXT_HOVER_MAIN_COLOR
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