<?php
array(
    'type' => 'param_group',
    'heading' => __( 'Values', 'js_composer' ),
    'param_name' => 'values',
    'description' => __( 'Enter values for graph - value, title and color.', 'js_composer' ),
    'value' => urlencode( json_encode( array(
        array(
            'label' => __( 'Development', 'js_composer' ),
            'value' => '90',
        ),
        array(
            'label' => __( 'Design', 'js_composer' ),
            'value' => '80',
        ),
        array(
            'label' => __( 'Marketing', 'js_composer' ),
            'value' => '70',
        ),
    ) ) ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Label', 'js_composer' ),
            'param_name' => 'label',
            'description' => __( 'Enter text used as title of bar.', 'js_composer' ),
            'admin_label' => true,
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Value', 'js_composer' ),
            'param_name' => 'value',
            'description' => __( 'Enter value of bar.', 'js_composer' ),
            'admin_label' => true,
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Color', 'js_composer' ),
            'param_name' => 'color',
            'value' => array(
                    __( 'Default', 'js_composer' ) => '',
                ) + array(
                    __( 'Classic Grey', 'js_composer' ) => 'bar_grey',
                    __( 'Classic Blue', 'js_composer' ) => 'bar_blue',
                    __( 'Classic Turquoise', 'js_composer' ) => 'bar_turquoise',
                    __( 'Classic Green', 'js_composer' ) => 'bar_green',
                    __( 'Classic Orange', 'js_composer' ) => 'bar_orange',
                    __( 'Classic Red', 'js_composer' ) => 'bar_red',
                    __( 'Classic Black', 'js_composer' ) => 'bar_black',
                ) + getVcShared( 'colors-dashed' ) + array(
                    __( 'Custom Color', 'js_composer' ) => 'custom',
                ),
            'description' => __( 'Select single bar background color.', 'js_composer' ),
            'admin_label' => true,
            'param_holder_class' => 'vc_colored-dropdown',
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __( 'Custom color', 'js_composer' ),
            'param_name' => 'customcolor',
            'description' => __( 'Select custom single bar background color.', 'js_composer' ),
            'dependency' => array(
                'element' => 'color',
                'value' => array( 'custom' ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'heading' => __( 'Custom text color', 'js_composer' ),
            'param_name' => 'customtxtcolor',
            'description' => __( 'Select custom single bar text color.', 'js_composer' ),
            'dependency' => array(
                'element' => 'color',
                'value' => array( 'custom' ),
            ),
        ),
    ),
);