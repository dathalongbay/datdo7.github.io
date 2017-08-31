<?php
wp_enqueue_script( 'wpb_jscomposer_teaser_js' );
wp_localize_script( 'wpb_jscomposer_teaser_js', 'i18nVcTeaser', array(
    'empty_title' => __( 'Empty title', 'js_composer' ),
    'text_label' => __( 'Text', 'js_composer' ),
    'image_label' => __( 'Image', 'js_composer' ),
    'title_label' => __( 'Title', 'js_composer' ),
    'link_label' => __( 'Link', 'js_composer' ),
    'text_text' => __( 'Text', 'js_composer' ),
    'text_excerpt' => __( 'Excerpt', 'js_composer' ),
    'text_custom' => __( 'Custom', 'js_composer' ),
    'image_featured' => __( 'Featered', 'js_composer' ),
    'image_custom' => __( 'Custom', 'js_composer' ),
    'link_label_text' => __( 'Link text', 'js_composer' ),
    'no_link' => __( 'No link', 'js_composer' ),
    'link_post' => __( 'Link to post', 'js_composer' ),
    'link_big_image' => __( 'Link to big image', 'js_composer' ),
    'add_custom_image' => __( 'Add custom image', 'js_composer' ),
) );