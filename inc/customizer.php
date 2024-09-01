<?php
/**
 * Define os elementos de personalização do tema
 */

function wp_pragmatico_customize($wp_customize)
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

    $wp_customize->add_setting(
        'sec_cores',
        [
            'default' => '#000000'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sec_cores',
            [
                'label' => __('Background Color', 'wp-pragmatico'),
                'section' => 'colors',
                'settings' => 'sec_cores'
            ]
        )
    );
}

add_action('customize_register', 'wp_pragmatico_customize');