<?php
/**
 * @package 	WordPress
 * @subpackage 	Startup Company
 * @version 	1.0.3
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('startup_company_register_theme_plugins')) {

function startup_company_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'startup-company'), 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.4.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'startup-company'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.1.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'startup-company'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'startup-company'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.6.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'startup-company'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.6.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'startup-company'), 
			'slug'					=> 'envato-market', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/envato-market.zip', 
			'required'				=> false, 
			'version'				=> '1.0.0-RC2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'startup-company'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'startup-company'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'startup-company'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'startup-company'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet Newsletters', 'startup-company'), 
			'slug'					=> 'wysija-newsletters', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 			'startup-company', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'startup-company'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'startup-company'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'startup-company') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'startup_company_register_theme_plugins');

