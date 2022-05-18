<?php
/**
 * Samarytanin Theme My Customizer Options
 *
 * @package samarytanin
 */

function samarytanin_personal_customize_register( $wp_customize ) {

    // Add Settings
    $wp_customize->add_setting('icon_setting_one', array(
        'transport'         => 'refresh',
    ));
    $wp_customize->add_setting( 'icon_text_setting_two', array(
        // 'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );

    // Add Section
    $wp_customize->add_section('Ikona strzałki', array(
        'title'             => __('Ikona strzałki', 'Samarytanin'), 
        'priority'          => 70,
    ));    

    // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'icon_setting_one_control', array(
        'label'             => __('Ikona strzałki która wraca użytkownika na górę strony', 'Samarytanin'),
        'section'           => 'Ikona strzałki',
        'settings'          => 'icon_setting_one',    
    ))); 
    
    $wp_customize->add_control( 'icon_text_setting_two', array(
        'type' => 'text',
        'section' => 'Ikona strzałki', // Add a default or your own section
        'label' => __( 'Alt obrazka' ),
        'description' => __( 'Alt obrazka strzałki.' ),
    ) );
}
add_action('customize_register', 'samarytanin_personal_customize_register');