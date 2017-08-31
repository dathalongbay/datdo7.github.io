<?php
$this->locale = array(
    'are_you_sure_reset_css_classes' => __( 'Are you sure you want to reset to defaults?', 'js_composer' ),
    'are_you_sure_reset_color' => __( 'Are you sure you want to reset to defaults?', 'js_composer' ),
    'saving' => __( 'Saving...', 'js_composer' ),
    'save' => __( 'Save Changes', 'js_composer' ),
    'saved' => __( 'Design Options successfully saved.', 'js_composer' ),
    'save_error' => __( 'Design Options could not be saved', 'js_composer' ),
    'form_save_error' => __( 'Problem with AJAX request execution, check internet connection and try again.', 'js_composer' ),
    'are_you_sure_delete' => __( 'Are you sure you want to delete this shortcode?', 'js_composer' ),
    'are_you_sure_delete_param' => __( "Are you sure you want to delete the shortcode's param?", 'js_composer' ),
    'my_shortcodes_category' => __( 'My shortcodes', 'js_composer' ),
    'error_shortcode_name_is_required' => __( 'Shortcode name is required.', 'js_composer' ),
    'error_enter_valid_shortcode_tag' => __( 'Please enter valid shortcode tag.', 'js_composer' ),
    'error_enter_required_fields' => __( 'Please enter all required fields for params.', 'js_composer' ),
    'new_shortcode_mapped' => __( 'New shortcode mapped from string!', 'js_composer' ),
    'shortcode_updated' => __( 'Shortcode updated!', 'js_composer' ),
    'error_content_param_not_manually' => __( 'Content param can not be added manually, please use checkbox.', 'js_composer' ),
    'error_param_already_exists' => __( 'Param %s already exists. Param names must be unique.', 'js_composer' ),
    'error_wrong_param_name' => __( 'Please use only letters, numbers and underscore for param name', 'js_composer' ),
    'error_enter_valid_shortcode' => __( 'Please enter valid shortcode to parse!', 'js_composer' ),

);
wp_localize_script( 'wpb_js_composer_settings', 'vcData', apply_filters( 'vc_global_js_data', array(
    'version' => WPB_VC_VERSION,
    'debug' => wpb_debug(),
) ) );
wp_localize_script( 'wpb_js_composer_settings', 'i18nLocaleSettings', $this->locale );