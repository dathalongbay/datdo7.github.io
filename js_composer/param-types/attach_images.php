<?php
array(
    'type' => 'attach_images',
    'heading' => __( 'Images', 'js_composer' ),
    'param_name' => 'images',
    'value' => '',
    'description' => __( 'Select images from media library.', 'js_composer' ),
    'dependency' => array(
        'element' => 'source',
        'value' => 'media_library',
    ),
);