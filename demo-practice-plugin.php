<?php
/** 
* Plugin Name: Demo Practice Plugin 
* PLugin Uri: https://wordpress.org
* Author: Md Zakaria Ahmed
* Author uri: https://demo.welabs
* Version: 0.0.1
* Description: Demo plugin for practise Everyday
* Lisence: GPL V2
* Text Domain: demopracticeplugin
*/

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// register_activation_hook(__FILE__, 'demo_register_activation_hook');
// register_deactivation_hook(__FILE__, 'demo_register_deactivation_hook');
// register_uninstall_hook( __FILE__, 'demo_register_uninstall_hook' );

// function demo_register_activate_hook(){
//     delete_option('updateTitle','demo plugin is now activate');
// }
// function demo_register_deactivate_hook(){
    
// }

add_action("init", "demo_short_code"); 
//(string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1)

function demo_short_code(){
    add_shortcode("myshortcode","shortcodefun");
}

function shortcodefun($attr){
    return "<strong>demo shortcode is now working</strong>";
}
