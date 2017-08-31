<?php
array(
    'type' => 'google_fonts',
    'param_name' => 'google_fonts',
    'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
    'settings' => array(
        'fields' => array(
            'font_family_description' => __( 'Select font family.', 'js_composer' ),
            'font_style_description' => __( 'Select font styling.', 'js_composer' ),
        ),
    ),
    'dependency' => array(
        'element' => 'use_theme_fonts',
        'value_not_equal_to' => 'yes',
    ),
);