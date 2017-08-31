<?php
array(
    'type' => 'dropdown',
    'heading' => __( 'Text source', 'js_composer' ),
    'param_name' => 'source',
    'value' => array(
        __( 'Custom text', 'js_composer' ) => '',
        __( 'Post or Page Title', 'js_composer' ) => 'post_title',
    ),
    'std' => '',
    'description' => __( 'Select text source.', 'js_composer' ),
);
array(
    'type' => 'dropdown',
    'heading' => __( 'Number of photos', 'js_composer' ),
    'param_name' => 'count',
    'value' => array(
        9,
        8,
        7,
        6,
        5,
        4,
        3,
        2,
        1,
    ),
    'description' => __( 'Select number of photos to display.', 'js_composer' ),
);
array(
    'type' => 'dropdown',
    'heading' => __( 'Type', 'js_composer' ),
    'param_name' => 'type',
    'value' => array(
        __( 'User', 'js_composer' ) => 'user',
        __( 'Group', 'js_composer' ) => 'group',
    ),
    'description' => __( 'Select photo stream type.', 'js_composer' ),
);
array(
    'type' => 'dropdown',
    'heading' => __( 'Display order', 'js_composer' ),
    'param_name' => 'display',
    'value' => array(
        __( 'Latest first', 'js_composer' ) => 'latest',
        __( 'Random', 'js_composer' ) => 'random',
    ),
    'description' => __( 'Select photo display order.', 'js_composer' ),
);