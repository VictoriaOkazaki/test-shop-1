<?php
add_action( 'customize_register', function(WP_Customize_Manager $wp_customize) {
    $wp_customize->add_section('shop_theme_options', array(
        'title'=> __('Theme options', 'shop'),
        'priority'=> 10
    ));

    //phone
    $wp_customize->add_setting('shop_phone');
    $wp_customize->add_control('shop_phone', array(
        'label'=> __('Phone in header', 'shop'),
        'section'=> 'shop_theme_options'
    ));

    //youtube
    $wp_customize->add_setting('shop_youtube');
    $wp_customize->add_control('shop_youtube', array(
        'label'=> __('Youtube link', 'shop'),
        'section'=> 'shop_theme_options'
    ));

    //facebook
    $wp_customize->add_setting('shop_facebook');
    $wp_customize->add_control('shop_facebook', array(
        'label'=> __('Facebook link', 'shop'),
        'section'=> 'shop_theme_options'
    ));
    //instagram
    $wp_customize->add_setting('shop_instagram');
    $wp_customize->add_control('shop_instagram', array(
        'label'=> __('Instagram link', 'shop'),
        'section'=> 'shop_theme_options'
    ));
} );

function shop_theme_options() {
    return array(
        'phone'=> get_theme_mod( 'shop_phone'),
        'youtube'=> get_theme_mod( 'shop_youtube'),
        'facebook'=> get_theme_mod( 'shop_facebook'),
        'instagram'=> get_theme_mod( 'shop_instagram'),
    );
}