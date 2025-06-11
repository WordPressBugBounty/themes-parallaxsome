<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$the_plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'accesspress-social-icons' => array(
					'slug' => 'accesspress-social-icons',
					'filename' => 'accesspress-social-icons.php',
					'class' => 'APS_Class'
				),

				'accesspress-social-login-lite' => array(
					'slug' => 'accesspress-social-login-lite',
					'filename' => 'accesspress-social-login-lite.php',
					'class' => 'APSS_Class'
				),

				'wp-floating-menu' => array(
					'slug' => 'wp-floating-menu',
					'filename' => 'wp-floating-menu.php',
					'class' => 'WPFM_FREE'
				),

				'smart-scroll-posts' => array(
					'slug' => 'smart-scroll-posts',
					'filename' => 'smart-scroll-posts.php',
					'class' => 'SSP_Smart_Scroll_Posts'
				),

				'accesspress-twitter-feed' => array(
					'slug' => 'accesspress-twitter-feed',
					'filename' => 'accesspress-twitter-feed.php',
					'class' => 'APTF_Class'
				),
			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'parallaxsome'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'parallaxsome'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				
			),

			// Pro Plugins
			'pro_plugins' => array(
				
			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Parallaxsome Welcome', 'parallaxsome' ),
		'theme_short_description' => esc_html__( 'ParallaxSome is a beautiful free responsive one page WordPress theme with awesome parallax scrolling effect. It is a highly customizable and flexible WP template suitable for multipurpose websites like business, agency, blog, portfolio, eCommerce etc. It is a fully responsive theme that fits perfectly on any device. ParallaxSome theme comes with various homepage sections each beautifully designed. Each of the home page sections in your single page site can be further customized with easy to use customization options. The theme is based on WordPress Live Customizer that allows you to customize the complete theme instantly. It is clean, simple, SEO friendly, flexible, multilingual, and feature-rich theme for modern websites. For demo http://demo.accesspressthemes.com/parallaxsome', 'parallaxsome' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'parallaxsome'),
		'deactivate' 			=> esc_html__('Deactivate', 'parallaxsome'),
		'activate' 				=> esc_html__('Activate', 'parallaxsome'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'parallaxsome'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'parallaxsome'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/parallaxsome/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'parallaxsome' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'parallaxsome'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'parallaxsome' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'parallaxsome' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'parallaxsome' ),


		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'parallaxsome'),
		'installed_btn' 	=> esc_html__('Activated', 'parallaxsome'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'parallaxsome'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'parallaxsome'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'parallaxsome'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'parallaxsome' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'parallaxsome' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'parallaxsome' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'parallaxsome' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'parallaxsome' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Parallaxsome_Welcome( $the_plugins, $strings );