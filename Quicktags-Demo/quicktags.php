<?php
/**
 * Plugin Name: Our Quick-tags
 * Plugin Uri: https://column-demo
 * Description: This plugin will add some extra quick-tags to your post
 * Author: SeJan ahmed BayZid
 * Version: 1.0
 * License: 
 * Text Domain: quicktags-demo
 * Domain path: /languages
 */

/** 
 *  textdomain 
 */
function col_demo_textdomain()
{
    load_plugin_textdomain('column-demo', false, dirname(__FILE__) . '/languages');
}
add_action('plugin_loaded', 'col_demo_textdomain');


/* 
 admin enqueue script
*/
function qtsd_assets($screen){
    if ('post.php' == $screen) {
        wp_enqueue_script('qtsd-main-js', plugin_dir_url(__FILE__) . "assets/js/main.js", array('quicktags', 'thickbox'));
        wp_localize_script('qtsd-main-js', 'qtsd', array( 'preview' => plugin_dir_url(__FILE__) . "fap.php" ));  // we can send data to js by this func
    }
}
add_action('admin_enqueue_scripts', 'qtsd_assets');
