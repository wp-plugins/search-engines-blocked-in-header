<?php
/*
Plugin Name: Search Engines Blocked in Header
Plugin URI: http://www.nostromo.nl/wordpress-plugins/search-engines-blocked-in-header
Description: Display the 'Search Engines Blocked' notification in the WordPress Toolbar.
Author: Marcel Bootsman
Version: 0.3  
Author URI: http://www.nostromo.nl
*/

function nostromo_search_engines_blocked() {
    global $wp_admin_bar, $wpdb;
    if ( !is_super_admin() || !is_admin_bar_showing() )
        return;
    $url = 'options-privacy.php';
    if (!get_option('blog_public')) {
       $wp_admin_bar->add_menu( array( 'id' => 'search_engines_blocked', 'title' => __('Search Engines Blocked'), 'href' => $url ) );
    }
}
add_action( 'admin_bar_menu', 'nostromo_search_engines_blocked', 1000 );

?>