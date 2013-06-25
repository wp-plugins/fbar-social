<?php
function socialplugin_install () {
global $wpdb;
require_once ABSPATH . 'wp-admin/includes/upgrade.php';
dbDelta('
CREATE TABLE `' .socialinfo_TABLE . '` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`display_mode` int(2)NOT NULL,
`width` int(11) NOT NULL,
`bar_distance` int(11) NOT NULL,
`color_scheme` varchar(50) NOT NULL,
`border_color` varchar(50) NOT NULL,
`show_scroll` int(11) NOT NULL DEFAULT 0,
`show_search` int(2) NOT NULL DEFAULT 0,
`facebook` varchar(255) NOT NULL,
`twitter` varchar(255) NOT NULL,
`googleplus` varchar(255) NOT NULL,
`linkedin` varchar(255) NOT NULL,
`pinterest` varchar(255) NOT NULL,
`instagram` varchar(255) NOT NULL,
`youtube` varchar(255) NOT NULL,
`rss` varchar(255) NOT NULL,
`show_content_bar` int(2) NOT NULL,
`text_msg` longtext NOT NULL,
`txtcolor` varchar(256) NOT NULL,
`facebook_check` int(2) NOT NULL DEFAULT 0,
`twitter_check` int(2) NOT NULL DEFAULT 0,
`google_check` int(2) NOT NULL DEFAULT 0,
`show_logo` int(2) NOT NULL DEFAULT 0,
`upload_img` varchar(255) NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 
');
dbDelta("INSERT INTO `wp_socialinfo_table` (`id`, `display_mode`, `width`,`bar_distance`,`color_scheme`, `border_color`, `show_scroll`, `show_search`, `facebook`, `twitter`, `googleplus`, `linkedin`, `pinterest`, `instagram`, `youtube`, `rss`, `show_content_bar`, `text_msg`,`txtcolor`,`facebook_check`, `twitter_check`, `google_check`, `show_logo`, `upload_img`) VALUES
(1, 2, 1100,500,'#000000', '#666666', 1, 1, 'https://www.facebook.com/pages/Geckoandfly/229390020415207', 'https://twitter.com/Geckoandfly', 'https://plus.google.com/115866143106162039549', 'http://www.linkedin.com/pub/tengyuen-ngan/1a/91a/aa0', 'http://pinterest.com/ngantengyuen/', 'http://instagram.com/ngantengyuen/', 'http://www.youtube.com/user/calvinngan', 'http://www.geckoandfly.com/feed', 1, 'Hello Guys', '#f7e686', 1, 1, 1, 1, 'wp-content/plugins/fbar/images/logo.png');");
}
function socialplugin_uninstall () {
global $wpdb;
$tab=socialinfo_TABLE;
require_once ABSPATH . 'wp-admin/includes/upgrade.php';
$wpdb->query('DROP TABLE `' . $tab . '`');
}
?>