<?php
/**
 * Blog Homepage Customizer options
 *
 * @package Kortez
 */

/**
 * Blog Homepage
 */
Kirki::add_panel( 'blog_homepage_options', array(
    'title' => esc_html__( 'Blog Homepage', 'kortez' ),
    'priority' => '120',
) );


/**
 * Latest Posts
 */
Kirki::add_section( 'latest_posts_options', array(
    'title'          => esc_html__( 'Latest Posts', 'kortez' ),
    'description'    => esc_html__( 'More options are available in Blog Page Section.', 'kortez' ),
    'panel'          => 'blog_homepage_options',
    'capability'     => 'edit_theme_options',
    'priority'       => 10,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Latest Posts Section From Homepage', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'disable_latest_posts_section',
	'section'     => 'latest_posts_options',
	'default'     => false,
	'priority'	  =>  10,
) );

Kirki::add_field( 'kortez', array(
	'label'        => esc_html__( 'Disable Section Title', 'kortez' ),
	'type'         => 'checkbox',
	'settings'     => 'disable_latest_posts_section_title',
	'section'      => 'latest_posts_options',
	'default'      => true,
	'priority'	   =>  20,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Section Title', 'kortez' ),
	'type'        => 'text',
	'settings'    => 'latest_posts_section_title',
	'section'     => 'latest_posts_options',
	'default'     => '',
	'priority'	  =>  30,
	'active_callback' => array(
		array(
			'setting'  => 'disable_latest_posts_section_title',
			'operator' => '==',
			'value'    => false,
		),
	),
) );

Kirki::add_field( 'kortez', array(
	'label'        => esc_html__( 'Disable Section Description', 'kortez' ),
	'type'         => 'checkbox',
	'settings'     => 'disable_latest_posts_section_description',
	'section'      => 'latest_posts_options',
	'default'      => true,
	'priority'	   =>  50,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Section Description', 'kortez' ),
	'type'        => 'text',
	'settings'    => 'latest_posts_section_description',
	'section'     => 'latest_posts_options',
	'default'     => '',
	'priority'	  =>  60,
	'active_callback' => array(
		array(
			'setting'  => 'disable_latest_posts_section_description',
			'operator' => '==',
			'value'    => false,
		),
	),
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Section Title and Description Alignment', 'kortez' ),
	'type'        => 'select',
	'settings'    => 'latest_posts_section_title_desc_alignment',
	'section'     => 'latest_posts_options',
	'default'     => 'text-left',
	'choices'     => array(
		'text-left'	 	=> esc_html__( 'Left', 'kortez' ),
		'text-center'  	=> esc_html__( 'Center', 'kortez' ),   
		'text-right'	=> esc_html__( 'Right', 'kortez' ),
	),
	'priority'	   =>  80,
	'active_callback' => array(
		array(
			array(
				'setting'  => 'disable_latest_posts_section_title',
				'operator' => '==',
				'value'    => false,
			),
			array(
				'setting'  => 'disable_latest_posts_section_description',
				'operator' => '==',
				'value'    => false,
			),
		),
	),
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Choose Category', 'kortez' ),
	'description' => esc_html__( 'Recent posts will show if any category is not chosen.', 'kortez' ),
	'type'        => 'select',
	'settings'    => 'latest_posts_category',
	'section'     => 'latest_posts_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select category', 'kortez' ), 
	'choices'     => kortez_get_post_categories(),
	'priority'	  =>  90,
) );

/**
 * Blog Page
 */
Kirki::add_panel( 'blog_page_options', array(
    'title'          => esc_html__( 'Blog Page', 'kortez' ),
    'priority'       => '130',
) );

/**
 * Blog Page Style
 */
Kirki::add_section( 'blog_page_style_options', array(
    'title'      => esc_html__( 'Style', 'kortez' ),
    'panel'      => 'blog_page_options',	   
    'capability' => 'edit_theme_options',
    'priority'   => '10',
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Post Layouts', 'kortez' ),
	'description' => esc_html__( 'Grid / List / Single', 'kortez' ),
	'type'        => 'radio-image',
	'settings'    => 'archive_post_layout',
	'section'     => 'blog_page_style_options',
	'default'     => 'list',
	'choices'  	  => apply_filters( 'kortez_archive_post_layout_filter', array(
		'grid'           => get_template_directory_uri() . '/assets/images/grid-layout.png',
		'list'           => get_template_directory_uri() . '/assets/images/list-layout.png',
		'single'         => get_template_directory_uri() . '/assets/images/single-layout.png',
	) ),
	'priority'    => 10,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Post View Number', 'kortez' ),
	'description' => esc_html__( 'Number of posts to show.', 'kortez' ),
	'type'        => 'number',
	'settings'    => 'archive_post_per_page',
	'section'     => 'blog_page_style_options',
	'default'     => 10,
	'choices'  => array(
		'min' => '0',
		'max' => '20',
		'step' => '1',
	),
	'priority'    => 20,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Choose Image Size', 'kortez' ),
	'type'        => 'select',
	'settings'    => 'render_post_image_size',
	'section'     => 'blog_page_style_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select Image Size', 'kortez' ),
	'choices'     => kortez_get_intermediate_image_sizes(),
	'priority'    => 30,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Post Title', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'hide_post_title',
	'section'     => 'blog_page_style_options',
	'default'     => false,
	'priority'    => 110,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Category', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'hide_category',
	'section'     => 'blog_page_style_options',
	'default'     => false,
	'priority'    => 130,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Date', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'hide_date',
	'section'     => 'blog_page_style_options',
	'default'     => false,
	'priority'    => 150,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Author', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'hide_author',
	'section'     => 'blog_page_style_options',
	'default'     => false,
	'priority'    => 160,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Comments Link', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'hide_comment',
	'section'     => 'blog_page_style_options',
	'default'     => false,
	'priority'    => 170,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Excerpt', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'hide_blog_page_excerpt',
	'section'     => 'blog_page_style_options',
	'default'     => false,
	'priority'    => 190,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Excerpt Length', 'kortez' ),
	'description' => esc_html__( 'Select number of words to display in excerpt', 'kortez' ),
	'type'        => 'number',
	'settings'    => 'post_excerpt_length',
	'section'     => 'blog_page_style_options',
	'default'     => 15,
	'choices' => array(
		'min'  => '5',
		'max'  => '60',
		'step' => '5',
	),
	'priority'    => 210,
	'active_callback' => array(
		array(
			'setting'  => 'hide_blog_page_excerpt',
			'operator' => '==',
			'value'    => false,
		),
	),
) );

/**
 * Blog Page Elements
 */
Kirki::add_section( 'blog_page_elements_options', array(
    'title'      => esc_html__( 'Elements', 'kortez' ),
    'panel'      => 'blog_page_options',	   
    'capability' => 'edit_theme_options',
    'priority'   => '20',
) );

Kirki::add_field( 'kortez',  array(
	'label'       => esc_html__( 'Blog Archive Pages Title', 'kortez' ),
	'type'        => 'select',
	'settings'    => 'disable_blog_page_title',
	'section'     => 'blog_page_elements_options',
	'default'     => 'enable_all_pages',
	'choices'     => array(
		'enable_all_pages'  => esc_html__( 'Enable in all', 'kortez' ),
		'disable_all_pages' => esc_html__( 'Disable from all', 'kortez' ),
	),
	'priority'    => 10,
) );

Kirki::add_field( 'kortez', array(
	'label'       => esc_html__( 'Disable Pagination', 'kortez' ),
	'type'        => 'checkbox',
	'settings'    => 'disable_pagination',
	'section'     => 'blog_page_elements_options',
	'default'     => false,
	'priority'    => 20,
) );