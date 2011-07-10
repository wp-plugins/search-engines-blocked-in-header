<?php
/*
Plugin Name: Search Engines Blocked in Header
Plugin URI: http://www.nostromo.nl/wordpress-plugins/search-engines-blocked-in-header
Description: Display the 'Search Engines Blocked' notification in the Header in the Admin area.
Author: Marcel Bootsman
Version: 0.1.1
Author URI: http://www.nostromo.nl
*/

add_action('in_admin_header', 'nostromo_sebih');
function nostromo_sebih() {
    if (!get_option('blog_public')) {
        $title = apply_filters('privacy_on_link_title', __('Your site is asking search engines not to index its content'));
        $content = apply_filters('privacy_on_link_text', __('Search Engines Blocked'));
        
        echo "<p style='float:left; position: relative; top:-4px;'><a title='$title' href='options-privacy.php'>$content</a></p>";
    }
}
?>