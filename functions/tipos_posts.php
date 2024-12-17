<?php
function wp_pragmatico_registro_tipos_posts()
{
    register_post_type(
        'experiencia',
        [
            'labels' => [
                'name' => 'Experiencia'
            ],
            'public' => true,
            'supports' => [
                'title',
                'thumbnail',
                'excerpt'
            ]
        ]
    );
}
add_action('init', 'wp_pragmatico_registro_tipos_posts');

function wp_pragmatico_metabox_experiencia()
{
    add_meta_box(
        'wp_pragmatico_metabox_experiencia',
        'Experiencia',
        'wp_pragmatico_metabox_experiencia_callback',
        'experiencia'
    );
}
add_action('add_meta_boxes', 'wp_pragmatico_metabox_experiencia');

function wp_pragmatico_metabox_experiencia_callback($post)
{
    $args_inputs = [
        'titulo' => 'Titulo',
        'empresa' => 'Empresa',
        'tempo' => 'Tempo'
    ];

    foreach ($args_inputs as $key => $input) {
        echo '<label for="' . $key . '">' . _e($input) . '</label>';
        echo '<input type="text" style="width: 100%" name="' . $key . '" id="' . $key . '" value="' . get_post_meta($post->ID, $key, true) . '">';
    }
}

function wp_pragmatico_metabox_experiencia_save($post_id)
{
    $args_inputs = [
        'titulo',
        'empresa',
        'tempo'
    ];

    foreach ($args_inputs as $input) {
        if (isset($_POST[$input])) {
            update_post_meta($post_id, $input, sanitize_text_field($_POST[$input]));
        }
    }
}
add_action('save_post', 'wp_pragmatico_metabox_experiencia_save');