<?php 
/* 
Plugin Name: FBar Social
Description: FBar Social plugin is a social sticky header bar for wordpress that magically appears at a specific height, it increases social interaction and reduces bounce rate as visitors are more likely to use the search bar.
Author: Ngan Tengyuen, Simu, Maruf, and Md.khroshed Alam
Plugin URI: http://www.geckoandfly.com
Version: 1.1
License: GPLv2
 */ 

	wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');

$src = plugins_url('jquery.minicolors.js', __FILE__);
wp_register_script( 'jquery.minicolors', $src );
wp_enqueue_script( 'jquery.minicolors' );

$src_style=plugins_url('styleNew.css', __FILE__);
wp_register_style( 'plugin-style',$src_style );
wp_enqueue_style( 'plugin-style');

 function my_plugin_admin_init_style() {
       /* Register our stylesheet. */
       wp_register_style( 'myPluginStylesheet', plugins_url('jquery.minicolors.css', __FILE__) );
	   wp_enqueue_style( 'myPluginStylesheet' );
   }

add_action( 'admin_init', 'my_plugin_admin_init_style' );
 
function renderStickyDiv()
	{
	//if(!is_admin() and !current_user_can( 'manage_options' ))
		//{
			$file = dirname(__FILE__).'/stickyheader.php';
			include($file);
		//}
	}
	
add_action('wp_footer','renderStickyDiv');	

 global $wpdb;
 
 define('social_TITLE', 'social');
 define('social_SLUG', 'social');
 define('socialinfo_TABLE', $wpdb->prefix . 'socialinfo_table');
 define('EMP_DOCROOT', dirname(__FILE__));
 define('EMP_WEBROOT', str_replace(getcwd(), home_url(), dirname(__FILE__)));
 
 register_activation_hook(__FILE__, 'socialplugin_install');
 register_deactivation_hook(__FILE__, 'socialplugin_uninstall');
 add_action('admin_menu', 'socialplugin_menu');

 include 'lib/model.php'; 
 include 'lib/install.php';
 include 'lib/controller.php';

?>