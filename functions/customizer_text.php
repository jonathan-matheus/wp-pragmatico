<?php
function wp_pragmatico_customize_sec_text($wp_customize)
{
    /**
     * Seção de textos do tema
     */
    $wp_customize->add_section(
        'sec_text',
        [
            'title' => __('Text home', 'wp-pragmatico')
        ]
    );

    // Texto 1
    $wp_customize->add_setting(
        'set_text',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT, 'wp-pragmatico')
        ]
    );

    // Controle do texto 1
    $wp_customize->add_control(
        'set_text',
        [
            'label' => __('Text 1', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text',
            'type' => 'text'
        ]
    );

    // Texto 2
    $wp_customize->add_setting(
        'set_text_2',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_2, 'wp-pragmatico')
        ]
    );

    // Controle do texto 2
    $wp_customize->add_control(
        'set_text_2',
        [
            'label' => __('Text 2', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_2',
            'type' => 'text'
        ]
    );

    // Profissão do autor
    $wp_customize->add_setting(
        'set_text_profession',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_PROFESSION, 'wp-pragmatico')
        ]
    );

    // Controle da profissão do autor
    $wp_customize->add_control(
        'set_text_profession',
        [
            'label' => __('Text profession', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_profession',
            'type' => 'text'
        ]
    );

    // Descrição do autor
    $wp_customize->add_setting(
        'set_text_description',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_DESCRIPTION, 'wp-pragmatico')
        ]
    );

    // Controle da descrição do autor
    $wp_customize->add_control(
        'set_text_description',
        [
            'label' => __('Text description', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_description',
            'type' => 'textarea'
        ]
    );

    // Sobre o autor titulo
    $wp_customize->add_setting(
        'set_text_about',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_ABOUT, 'wp-pragmatico')
        ]
    );

    // Controle sobre o autor titulo
    $wp_customize->add_control(
        'set_text_about',
        [
            'label' => __('Text about', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_about',
            'type' => 'text'
        ]
    );

    // Texto sobre o autor
    $wp_customize->add_setting(
        'set_text_about_description',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_ABOUT_DESCRIPTION, 'wp-pragmatico')
        ]
    );

    // Controle sobre o autor
    $wp_customize->add_control(
        'set_text_about_description',
        [
            'label' => __('Text about description', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_about_description',
            'type' => 'textarea'
        ]
    );

    // Tecnologias usadas titulo
    $wp_customize->add_setting(
        'set_text_technologies_title',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_TECHNOLOGIES_TITLE, 'wp-pragmatico')
        ]
    );

    // Controle sobre o autor
    $wp_customize->add_control(
        'set_text_technologies_title',
        [
            'label' => __('Text technologies title', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_technologies_title',
            'type' => 'text'
        ]
    );

    // Lista de tecnologias usadas
    $wp_customize->add_setting(
        'set_text_technologies',
        [
            'default' => __(WP_PRAGMATICO_SET_TEXT_TECHNOLOGIES, 'wp-pragmatico')
        ]
    );

    // Controle da lista de tecnologias usadas
    $wp_customize->add_control(
        'set_text_technologies',
        [
            'label' => __('Text technologies', 'wp-pragmatico'),
            'section' => 'sec_text',
            'settings' => 'set_text_technologies',
            'type' => 'textarea'
        ]
    );
}
add_action('customize_register', 'wp_pragmatico_customize_sec_text');