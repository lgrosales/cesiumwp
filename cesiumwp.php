<?php
	
if(!class_exists('WP_Plugin_Cesium'))
{
    class WP_Plugin_Cesium
    {
        public function __construct()
        {
            add_action('admin_init', array(&$this, 'admin_init'));
			add_action('admin_menu', array(&$this, 'add_menu'));
        }
    
        public static function activate()
        {
            // Do nothing
        }
       
        public static function deactivate()
        {
            // Do nothing
        } 
		
    }
} 

if(class_exists('WP_Plugin_Cesium'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WP_Plugin_Cesium', 'activate'));
    register_deactivation_hook(__FILE__, array('WP_Plugin_Cesium', 'deactivate'));

    // instantiate the plugin class
    $wp_plugin_template = new WP_Plugin_Cesium();
}