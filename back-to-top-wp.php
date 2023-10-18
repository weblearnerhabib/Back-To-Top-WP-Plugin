<?php
/*
 * Plugin Name:       Back To Top WP
 * Plugin URI:        https://github.com/weblearnerhabib/Back-To-Top-WP-Plugin
 * Description:       Back To Top WP plugin allows the visitor to smoothly scrolls to the top of a page.
 * Version:           1.2.1
 * Requires at least: 5.3
 * Requires PHP:      7.2
 * Author:            Freelancer Habib
 * Author URI:        https://freelancer.com/u/csehabiburr183/
 * Update URI:        https://github.com/weblearnerhabib/Back-To-Top-WP-Plugin
 * Text Domain:       bttwp
 */


// Including Plugin CSS File
function bttwp_enqueue_style(){
    wp_enqueue_style('bttwp.style', plugins_url('css/bttwp.style.css', __FILE__));
}
add_action("wp_enqueue_scripts", "bttwp_enqueue_style");


// Including Jquery From Wordpress Core Files
function bttwp_enqueue_scripts(){
    wp_enqueue_script('jquery');
}
add_action("wp_enqueue_scripts", "bttwp_enqueue_scripts");


// Diplay Back To Top Button To FrontEnd
function scroll_to_top_wp_output_html() {
    echo '';
}
add_action('wp_footer', 'scroll_to_top_wp_output_html');


// Back To Top Button Handler
function bttwp_bottomTotop_script(){

}
add_action("wp_footer", "bttwp_bottomTotop_script");

?>