<?php
array(
    'type' => 'exploded_textarea_safe',
    'heading' => __( 'External links', 'js_composer' ),
    'param_name' => 'custom_srcs',
    'description' => __( 'Enter external link for each gallery image (Note: divide links with linebreaks (Enter)).', 'js_composer' ),
    'dependency' => array(
        'element' => 'source',
        'value' => 'external_link',
    ),
);