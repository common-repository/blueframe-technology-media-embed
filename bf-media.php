<?php
/*
* Plugin Name: BlueFrame Technology Media Embed
* Description: Plugin to embed BlueFrame media assets with short codes in WordPress.
* Version: 1.0
* Author: BlueFrame Technology, LLC.
* Author URI: www.blueframetech.com
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*
* {Plugin Name} is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* any later version.
* 
* {Plugin Name} is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*  
* You should have received a copy of the GNU General Public License
* along with {Plugin Name}. If not, see {License URI}.
*/

function bf_create_embed($atts) {

	$a = shortcode_atts( array(
		'id' => null,
        'domain' => '//vcloud.volarvideo.com',
        'width' => '640',
        'height' => '360',
        'autoplay' => false,
        'style' => ''
	), $atts);

	if (is_numeric($a['id']))
	{
		$embedSrc = $a['domain'].'/broadcast/embed/'.$a['id'];

		if ($a['autoplay'] === 'true' || $a['autoplay'] === '1')
		{
			$a['autoplay'] = true;
		}
		else if (is_string($a['autoplay']))
		{
			$a['autoplay'] = false;
		}

		if ($a['autoplay'])
		{
			$embedSrc .= '?autoplay=1';
		}
?>

<iframe src="<?php echo $embedSrc; ?>" frameborder="0" width="<?php echo $a['width']; ?>" height="<?php echo $a['height']; ?>" scrolling="no" style="<?php echo $a['style']; ?>"></iframe>

<?php

	}
}

add_shortcode('bf-broadcast', 'bf_create_embed');

function bf_create_media_widget($atts) {

	$a = shortcode_atts( array(
        'id' => null,
        'domain' => '//vcloud.volarvideo.com',
        'style' => 'max-width:728px;margin:auto'
    ), $atts );

	if (is_numeric($a['id']))
	{
		// Leverage WordPress's jQuery.  The widget will install jQuery if its
		// not present, but this is recommended.
		wp_enqueue_script("jquery");
?>

<div data-widget-id="<?php echo $a['id']; ?>" data-source="<?php echo $a['domain']; ?>" class="bf-widget" style="<?php echo $a['style']; ?>"></div>

<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//d84q8uo531s3a.cloudfront.net/production/widget.min.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'blueframe-jssdk'));
</script>

<?php

	}
}

add_shortcode('bf-media-widget', 'bf_create_media_widget');
?>