<?php
/**
 * ParallaxSome Theme Customizer for Design panel.
 *
 * @package AccessPress Themes
 * @subpackage ParallaxSome
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

if( ! function_exists( 'parallaxsome_design_panel_register' ) ):
	function parallaxsome_design_panel_register( $wp_customize ) {
		
		// Register the radio image control class as a JS control type.
    	$wp_customize->register_control_type( 'Parallaxsome_Customize_Control_Radio_Image' );

		/**
		 * Design Settings Panel on customizer
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_panel(
	        'parallaxsome_design_settings_panel', 
	        	array(
	        		'priority'       => 20,
	            	'capability'     => 'edit_theme_options',
	            	'theme_supports' => '',
	            	'title'          => esc_html__( 'Design Settings', 'parallaxsome' ),
	            ) 
	    );
/*--------------------------------------------------------------------------------------------------------------*/
		/**
		 * Archive Settings
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'archive_settings_section',
	        array(
	            'title'		=> esc_html__( 'Archive Settings', 'parallaxsome' ),
	            'panel'     => 'parallaxsome_design_settings_panel',
	            'priority'  => 5,
	        )
	    );	    

	    /**
	     * Field for Image Radio
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'ps_archive_sidebar_layout',
	        array(
	            'default'           => 'right_sidebar',
	            'sanitize_callback' => 'sanitize_key',
	        )
	    );	    
	    $wp_customize->add_control( new Parallaxsome_Customize_Control_Radio_Image(
	        $wp_customize,
	        'ps_archive_sidebar_layout',
	            array(
	                'label'    => esc_html__( 'Archive Sidebars', 'parallaxsome' ),
	                'description' => esc_html__( 'Choose sidebar from available layouts', 'parallaxsome' ),
	                'section'  => 'archive_settings_section',
	                'choices'  => array(
		                    'left_sidebar' => array(
		                        'label' => esc_html__( 'Left Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/left-sidebar.png'
		                    ),
		                    'right_sidebar' => array(
		                        'label' => esc_html__( 'Right Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/right-sidebar.png'
		                    ),
		                    'no_sidebar' => array(
		                        'label' => esc_html__( 'No Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/no-sidebar.png'
		                    ),
		                    'no_sidebar_center' => array(
		                        'label' => esc_html__( 'No Sidebar Center', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/no-sidebar-center.png'
		                    )
		            ),
		            'priority' => 5
	            )
	        )
	    );

	     /**
	     * Switch option for MetaData
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'archive_metadata_option',
		        array(
		            'default' => 'show',
		            'sanitize_callback' => 'parallaxsome_sanitize_switch_option',
		        )
	    );
	    $wp_customize->add_control( new Parallaxsome_Customize_Switch_Control(
	        $wp_customize, 
            'archive_metadata_option', 
	            array(
	                'type' 		=> 'switch',	                
	                'label' 	=> esc_html__( 'MetaData Option', 'parallaxsome' ),
	                'description' 	=> esc_html__( 'Show/hide option for meta data in archive page.', 'parallaxsome' ),
	                'section' 	=> 'archive_settings_section',
	                'choices'   => array(
	                    'show' 	=> esc_html__( 'Show', 'parallaxsome' ),
	                    'hide' 	=> esc_html__( 'Hide', 'parallaxsome' )
	                    ),
	                'priority'  => 10,
	            )
	        )
	    );

	     /**
	     * Switch option for Featured Image
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'archive_ft_image_option',
		        array(
		            'default' => 'show',
		            'sanitize_callback' => 'parallaxsome_sanitize_switch_option',
		        )
	    );
	    $wp_customize->add_control( new Parallaxsome_Customize_Switch_Control(
	        $wp_customize, 
            'archive_ft_image_option', 
	            array(
	                'type' 		=> 'switch',	                
	                'label' 	=> esc_html__( 'Featured Image Option', 'parallaxsome' ),
	                'description' 	=> esc_html__( 'Show/hide option for featured image in archive page.', 'parallaxsome' ),
	                'section' 	=> 'archive_settings_section',
	                'choices'   => array(
	                    'show' 	=> esc_html__( 'Show', 'parallaxsome' ),
	                    'hide' 	=> esc_html__( 'Hide', 'parallaxsome' )
	                    ),
	                'priority'  => 10,
	            )
	        )
	    );

	    /**
	     * Field for Archive read more button text
	     *
	     * @since 1.0.0
	     */
	    
/*--------------------------------------------------------------------------------------------------------------*/
		/**
		 * Page Settings
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'page_settings_section',
	        array(
	            'title'		=> esc_html__( 'Page Settings', 'parallaxsome' ),
	            'panel'     => 'parallaxsome_design_settings_panel',
	            'priority'  => 10,
	        )
	    );	    

	    /**
	     * Field for sidebar Image Radio
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'ps_default_page_sidebar',
	        array(
	            'default'           => 'right_sidebar',
	            'sanitize_callback' => 'sanitize_key',
	        )
	    );	    
	    $wp_customize->add_control( new Parallaxsome_Customize_Control_Radio_Image(
	        $wp_customize,
	        'ps_default_page_sidebar',
	            array(
	                'label'    => esc_html__( 'Page Sidebars', 'parallaxsome' ),
	                'description' => esc_html__( 'Choose sidebar from available layouts', 'parallaxsome' ),
	                'section'  => 'page_settings_section',
	                'choices'  => array(
		                    'left_sidebar' => array(
		                        'label' => esc_html__( 'Left Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/left-sidebar.png'
		                    ),
		                    'right_sidebar' => array(
		                        'label' => esc_html__( 'Right Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/right-sidebar.png'
		                    ),
		                    'no_sidebar' => array(
		                        'label' => esc_html__( 'No Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/no-sidebar.png'
		                    ),
		                    'no_sidebar_center' => array(
		                        'label' => esc_html__( 'No Sidebar Center', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/no-sidebar-center.png'
		                    )
		            ),
		            'priority' => 5
	            )
	        )
	    );
/*--------------------------------------------------------------------------------------------------------------*/
		/**
		 * Post Settings
		 *
		 * @since 1.0.0
		 */
		$wp_customize->add_section(
	        'post_settings_section',
	        array(
	            'title'		=> esc_html__( 'Post Settings', 'parallaxsome' ),
	            'panel'     => 'parallaxsome_design_settings_panel',
	            'priority'  => 15,
	        )
	    );	    

	    /**
	     * Field for sidebar Image Radio
	     *
	     * @since 1.0.0
	     */
	    $wp_customize->add_setting(
	        'ps_default_post_sidebar',
	        array(
	            'default'           => 'right_sidebar',
	            'sanitize_callback' => 'sanitize_key',
	        )
	    );	    
	    $wp_customize->add_control( new Parallaxsome_Customize_Control_Radio_Image(
	        $wp_customize,
	        'ps_default_post_sidebar',
	            array(
	                'label'    => esc_html__( 'Post Sidebars', 'parallaxsome' ),
	                'description' => esc_html__( 'Choose sidebar from available layouts', 'parallaxsome' ),
	                'section'  => 'post_settings_section',
	                'choices'  => array(
		                    'left_sidebar' => array(
		                        'label' => esc_html__( 'Left Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/left-sidebar.png'
		                    ),
		                    'right_sidebar' => array(
		                        'label' => esc_html__( 'Right Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/right-sidebar.png'
		                    ),
		                    'no_sidebar' => array(
		                        'label' => esc_html__( 'No Sidebar', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/no-sidebar.png'
		                    ),
		                    'no_sidebar_center' => array(
		                        'label' => esc_html__( 'No Sidebar Center', 'parallaxsome' ),
		                        'url'   => '%s/assets/images/no-sidebar-center.png'
		                    )
		            ),
		            'priority' => 5
	            )
	        )
	    );

	    /**
	    * Switch option for Featured Image
	    * @since 1.0.0
	    */
	    $wp_customize->add_setting(
	        'post_feat_image_option',
		        array(
		            'default' => 'show',
		            'sanitize_callback' => 'parallaxsome_sanitize_switch_option',
		        )
	    );
	    $wp_customize->add_control( new Parallaxsome_Customize_Switch_Control(
	        $wp_customize, 
            'post_feat_image_option', 
	            array(
	                'type' 		=> 'switch',	                
	                'label' 	=> esc_html__( 'Featured Image Option', 'parallaxsome' ),
	                'description' 	=> esc_html__( 'Show/hide option for featured image in single post.', 'parallaxsome' ),
	                'section' 	=> 'post_settings_section',
	                'choices'   => array(
	                    'show' 	=> esc_html__( 'Show', 'parallaxsome' ),
	                    'hide' 	=> esc_html__( 'Hide', 'parallaxsome' )
	                    ),
	                'priority'  => 10,
	            )
	        )
	    );

	    /**
	    * Switch option for Post Cat
	    * @since 1.0.0
	    */
	    $wp_customize->add_setting(
	        'single_post_cat_option',
		        array(
		            'default' => 'show',
		            'sanitize_callback' => 'parallaxsome_sanitize_switch_option',
		        )
	    );
	    $wp_customize->add_control( new Parallaxsome_Customize_Switch_Control(
	        $wp_customize, 
            'single_post_cat_option', 
	            array(
	                'type' 		=> 'switch',	                
	                'label' 	=> esc_html__( 'Post Categories Option', 'parallaxsome' ),
	                'description' 	=> esc_html__( 'Show/hide option for post categories in single post.', 'parallaxsome' ),
	                'section' 	=> 'post_settings_section',
	                'choices'   => array(
	                    'show' 	=> esc_html__( 'Show', 'parallaxsome' ),
	                    'hide' 	=> esc_html__( 'Hide', 'parallaxsome' )
	                    ),
	                'priority'  => 10,
	            )
	        )
	    );

	    /**
	    * Switch option for Post MetaData
	    * @since 1.0.0
	    */
	    $wp_customize->add_setting(
	        'single_post_metadata_option',
		        array(
		            'default' => 'show',
		            'sanitize_callback' => 'parallaxsome_sanitize_switch_option',
		        )
	    );
	    $wp_customize->add_control( new Parallaxsome_Customize_Switch_Control(
	        $wp_customize, 
            'single_post_metadata_option', 
	            array(
	                'type' 		=> 'switch',	                
	                'label' 	=> esc_html__( 'Post MetaData Option', 'parallaxsome' ),
	                'description' 	=> esc_html__( 'Show/hide option for post metadata in single post.', 'parallaxsome' ),
	                'section' 	=> 'post_settings_section',
	                'choices'   => array(
	                    'show' 	=> esc_html__( 'Show', 'parallaxsome' ),
	                    'hide' 	=> esc_html__( 'Hide', 'parallaxsome' )
	                    ),
	                'priority'  => 10,
	            )
	        )
	    );

	} //close fucntion
endif;
add_action( 'customize_register', 'parallaxsome_design_panel_register' );