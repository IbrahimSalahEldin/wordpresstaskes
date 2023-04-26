<?php
/**
 * Header Customizer options
 *
 * @package Kortez
 */

/**
 * Header
 */
Kirki::add_panel( 'header_options', array(
    'title' => esc_html__( 'Header', 'kortez' ),
    'priority' => '10',
) );

/**
 * Header style
 */
Kirki::add_section( 'header_style_options', array(
    'title'      => esc_html__( 'Style', 'kortez' ),
    'panel'      => 'header_options',	   
    'capability' => 'edit_theme_options',
    'priority'   => '30',
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Header Height (in px)', 'kortez' ),
	'description' => esc_html__( 'This option will only apply to Desktop. Please click on below Desktop Icon to see changes. Automatically adjust by theme default in the responsive devices.
	', 'kortez' ),
	'type'        => 'slider',
	'settings'    => 'header_image_height',
	'section'     => 'header_style_options',
	'transport'   => 'postMessage',
	'default'     => 80,
	'priority'	  => '300',
	'choices'     => array(
		'min'  => 50,
		'max'  => 1200,
		'step' => 10,
	),
) );