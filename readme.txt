=== Plugin Name ===
Contributors: benkant
Tags: blueframe, video, media
Requires at least: 4.4
Tested up to: 4.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to embed BlueFrame media assets with short codes in WordPress.

== Description ==

This plugin provides short codes to embed BlueFrame broadcasts and media widgets into WordPress sites.  Simply set the the broadcast or media widget id in the short code.  Other customizations of the embed are described in the FAQ.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/blueframe-technology-media-embed` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use short codes described in the FAQ to present BlueFrame assets on your WordPress site


== Frequently Asked Questions ==

= How do I embed a BlueFrame broadcast? =

Add a 'bf-broadcast' short code with your broadcast id to your page.  The short code must include an broadcast id but may also include other options listed below.

Example:

`[bf-broadcast id=29676]`

Options:

* id (required): Broadcast id found on BlueFrame's admin portal.
* domain (optional): Base url for the domain hosting the broadcast.
* width (optional): Width of the video player.  Can be any valid HTML width value (defaults to 640).  
* height (optional): Height of the video player.  Can be any valid HTML height value (defaults to 480).  
* autoplay (optional): Configures if a player should start playing on page load.  Valid values are 'true' or 'false' (defaults to false).
* style (optional): Sets the style attribute on the element containing the player for customized layout (empty by default).

= How do I embed a BlueFrame media widget? =

Add a 'bf-media-widget' short code with your media widget id to you page.  The short code must include a media widget id but may also include other options listed below.

Example:

`[bf-media-widget id=179]`

Options:

* id (required): Media widget id found on BlueFrame's admin portal.
* domain (optional): Base url for the domain hosting the media widget.
* style (optional): Sets the style attribute on the element containing the media widget for customized layout (defaults to 'max-width:728px;margin:auto').

== Screenshots ==

1. Broadcast on page
2. Media widget on page

== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==

* NA

== Arbitrary section ==
