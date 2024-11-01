<?php

/*

Plugin Name: Webcam Booth

Plugin URI: http://www.deluxewebwise.com/webcam-booth/

Description: Webcam Booth with effects

Author: Suneel Reddy

Version: 1.8

Author URI: http://www.deluxewebwise.com

*/



function my_function() {

	

	echo '<tr>

			<td><p align="center" class="Style6">

					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,29,0" width="640" height="500" align="absmiddle">

						<param name="movie" value="video.swf">

						<param name="quality" value="high">

						<embed src="/wp-content/plugins/webcam-booth/webcam/webcam.swf" width="640" height="500" align="center" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>

					</object>

			   </p>    
			</td>

		 </tr>';

	return $html;

}



if (!is_admin())

	add_shortcode('webcam', 'my_function');




function webcam_settings()
{
include('webcam_settings_page.php');
}
add_action('admin_menu', 'webcam_plugin_settings');

function webcam_plugin_settings() {

add_menu_page('Webcam Booth Preview', 'Webcam Booth Preview', 'administrator', 'webcam_settings', 'webcam_settings');

}
?>