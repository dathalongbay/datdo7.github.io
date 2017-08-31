<?php
array(
    'type' => 'attach_image',
    'heading' => __( 'Image', 'js_composer' ),
    'param_name' => 'image',
    'value' => '',
    'description' => __( 'Select image from media library.', 'js_composer' ),
    'dependency' => array(
        'element' => 'source',
        'value' => 'media_library',
    ),
    'admin_label' => true,
);