<?php
/*
Plugin Name: LowerMedia Admin Bar Bottom
Plugin URI: http://lowermedia.net
Description: WordPress plugin that moves the admin bar to the bottom!
Version: 1.0.0.1
Stable: 1.0.0
Author: Pete Lower
Author URI: http://petelower.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*############################################################################################
#	This plugin 
#
*/

/*############################################################################################
#
#   
#   
*/

function fb_move_admin_bar() {
    echo '
    <style type="text/css">
    body.admin-bar {
        margin-top: -32px;//-28
        padding-bottom: 0px;//28
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks>ul>li {
        position:relative;
    }
    #wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper {
        bottom:28px;
    }
    </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );
?>