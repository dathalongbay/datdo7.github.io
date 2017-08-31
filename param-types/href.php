<?php
array(
    'type' => 'href',
    'heading' => __( 'Image link', 'js_composer' ),
    'param_name' => 'link',
    'description' => __( 'Enter URL if you want this image to have a link (Note: parameters like "mailto:" are also accepted).', 'js_composer' ),
    'dependency' => array(
        'element' => 'onclick',
        'value' => 'custom_link',
    ),
);