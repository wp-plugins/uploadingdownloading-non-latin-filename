=== uploading downloading non-latin filename ===
Contributors: mytory
Donate link: http://mytory.co.kr/paypal-donation
Tags: uploading downloading non-latin filename
Requires at least: 2.9
Tested up to: 3.4.2
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allow to upload/download non-latin filename.

== Description ==

WordPress cannot attach files with non-latin file name (e.g., Korean). This is the one major drawback to popularization of WordPress among non-english users.

This plugin will rename the file (with latin or non-latin names) to numbers, stores the original file name as a title of media post, and upload the file to the server. When a user attempts to download the file, the file will be returned with corresponding media post's title. But image files will not be processed as such: image files will be returned with numbered name. Because, src value of shoud be real filename on server.

This plugin supports GD bbPress Attachments of bbPress.

CAUTION: The files uploaded with this plugin will be downloaded via 'download.php'. Therefore, these file links in the post will be broken when the plugin is removed. But in case of images files these links, of course, will be fine without this plugin. 

== Installation ==

1. Upload the 'non-latin-filename' folder to the '/wp-content/plugins/' directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Screenshots ==

* http://dl.dropbox.com/u/15546257/wordpress-plugin/non-latin-filename/screenshot1.png
* http://dl.dropbox.com/u/15546257/wordpress-plugin/non-latin-filename/screenshot2.png
* http://dl.dropbox.com/u/15546257/wordpress-plugin/non-latin-filename/screenshot3.png

== Changelog ==

= 1.0.2 =
fixed for firefox download

= 1.0.1 =
fixed download error