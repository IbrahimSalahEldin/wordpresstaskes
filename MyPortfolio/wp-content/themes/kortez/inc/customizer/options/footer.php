<?php
/**
 * Footer Customizer options
 *
 * @package Kortez
 */

/**
 * Footer
 */
Kirki::add_panel( 'footer_options', array(
    'title' => esc_html__( 'Footer', 'kortez' ),
    'priority' => '110',
) );

/**
 * Footer Widgets
 */
Kirki::add_section( 'footer_widgets_options', array(
    'title'          => esc_html__( 'Footer Widgets', 'kortez' ),
    'panel'          => 'footer_options',
    'capability'     => 'edit_theme_options',
    'priority' 		 => 10,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Widget Columns Layouts', 'kortez' ),
	'type'        => 'radio-image',
	'settings'    => 'footer_widget_layout',
	'section'     => 'footer_widgets_options',
	'default'     => 'footer_widget_layout_one',
	'choices'  => array(
		'footer_widget_layout_one'    => get_template_directory_uri() . '/assets/images/widget-layout-1.png',
		'footer_widget_layout_two'    => get_template_directory_uri() . '/assets/images/widget-layout-2.png',
		'footer_widget_layout_three'    => get_template_directory_uri() . '/assets/images/widget-layout-3.png',
		'footer_widget_layout_four' => get_template_directory_uri() . '/assets/images/widget-layout-4.png',
	),
	'priority'	   =>  40,
) );