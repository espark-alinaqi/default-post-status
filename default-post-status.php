<?php
/**
 * Plugin Name: Default Post Status
 * Plugin URI: https://yourwebsite.com/
 * Description: Sets the default post status to "publish".
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com/
 */

function set_default_post_status( $data, $postarr ) {
    if ( $data['post_type'] === 'post' && empty( $data['post_status'] ) ) {
        $data['post_status'] = 'publish';
    }
    return $data;
}
add_filter( 'wp_insert_post_data', 'set_default_post_status', 99, 2 );
