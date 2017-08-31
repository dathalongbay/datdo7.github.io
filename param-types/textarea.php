<?php
array(
    'type' => 'textarea',
    'heading' => __( 'Text', 'js_composer' ),
    'param_name' => 'text',
    'admin_label' => true,
    'value' => __( 'This is custom heading element', 'js_composer' ),
    'description' => __( 'Note: If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'js_composer' ),
    'dependency' => array(
        'element' => 'source',
        'is_empty' => true,
    ),
);