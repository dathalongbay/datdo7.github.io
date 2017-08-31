<?php
array(
    'type' => 'param_group',
    'heading' => __( 'Values', 'js_composer' ),
    'param_name' => 'values',
    'value' => urlencode( json_encode( array(
        array(
            'title' => __( 'One', 'js_composer' ),
            'y_values' => '10; 15; 20; 25; 27; 25; 23; 25',
            'color' => 'blue',
        ),
        array(
            'title' => __( 'Two', 'js_composer' ),
            'y_values' => '25; 18; 16; 17; 20; 25; 30; 35',
            'color' => 'pink',
        ),
    ) ) ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title', 'js_composer' ),
            'param_name' => 'title',
            'description' => __( 'Enter title for chart dataset.', 'js_composer' ),
            'admin_label' => true,
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Y-axis values', 'js_composer' ),
            'param_name' => 'y_values',
            'description' => __( 'Enter values for axis (Note: separate values with ";").', 'js_composer' ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Color', 'js_composer' ),
            'param_name' => 'color',
            'value' => getVcShared( 'colors-dashed' ),
            'description' => __( 'Select chart color.', 'js_composer' ),
            'param_holder_class' => 'vc_colored-dropdown',
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __( 'Custom color', 'js_composer' ),
            'param_name' => 'custom_color',
            'description' => __( 'Select custom chart color.', 'js_composer' ),
        ),
    ),
    'callbacks' => array(
        'after_add' => 'vcChartParamAfterAddCallback',
    ),
);