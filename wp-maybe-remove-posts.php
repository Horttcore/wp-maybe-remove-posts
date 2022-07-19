<?php
/*
Plugin Name:  WP Maybe Remove Posts
Plugin URI:   https://github.com/Horttcore/wp-maybe-remove-posts
Description:  Maybe disable posts admin menu entry.
Version:      0.1.0
Author:       Ralf Hortt
Author URI:   https://ralfhortt.dev/
License:      GPL
*/

namespace RalfHortt\MaybeDisablePosts;

add_action( 'admin_menu', function(){
    remove_menu_page('edit.php');
} );