<?php
class socialinfo_Table {

/* 		public static function insert ($row) {
		global $wpdb;
		return $wpdb->insert( socialinfo_TABLE, array(
			'display_mode' => stripslashes_deep($row['display_mode']),
			'width' => stripslashes_deep($row['width']),
			'bar_distance' => stripslashes_deep($row['distance']),
			'color_scheme' => stripslashes_deep($row['scheme']),
			'border_color' => stripslashes_deep($row['border']),
			'show_scroll' => stripslashes_deep($row['scroll']),
			'show_search' => stripslashes_deep($row['search']),
			'facebook' => stripslashes_deep($row['fb']),
			'twitter' => stripslashes_deep($row['twi']),
			'googleplus' => stripslashes_deep($row['goo']),
			'linkedin' => stripslashes_deep($row['lin']),
			'pinterest' => stripslashes_deep($row['pin']),
			'instagram' => stripslashes_deep($row['ins']),
			'youtube' => stripslashes_deep($row['you']),
			'rss' => stripslashes_deep($row['rss']),
			'show_content_bar' => stripslashes_deep($row['content']),
			'text_msg' => stripslashes_deep($row['msg']),
			'facebook_check' => stripslashes_deep($row['fb_check']),
			'twitter_check' => stripslashes_deep($row['twi_check']),
			'google_check' => stripslashes_deep($row['plus_check']),
			'show_logo' => stripslashes_deep($row['logo']),
			'upload_img' => stripslashes_deep($row['image']),
		));
		} */
		
		//update
		public static function get() {
		global $wpdb;
        $rows = $wpdb->get_results('SELECT * FROM  wp_socialinfo_table', ARRAY_A);
        return $rows;

		} 

			public static function update($row){
			global $wpdb;
			$updateid=$row['social_update_id'];
			$update=array(
			'display_mode' => stripslashes_deep($row['display_mode']),
			'width' => stripslashes_deep($row['width']),
			'bar_distance' => stripslashes_deep($row['distance']),
			'color_scheme' => stripslashes_deep($row['scheme']),
			'border_color' => stripslashes_deep($row['border']),
			'show_scroll' => stripslashes_deep($row['scroll']),
			'show_search' => stripslashes_deep($row['search']),
			'facebook' => stripslashes_deep($row['fb']),
			'twitter' => stripslashes_deep($row['twi']),
			'googleplus' => stripslashes_deep($row['goo']),
			'linkedin' => stripslashes_deep($row['lin']),
			'pinterest' => stripslashes_deep($row['pin']),
			'instagram' => stripslashes_deep($row['ins']),
			'youtube' => stripslashes_deep($row['you']),
			'rss' => stripslashes_deep($row['rss']),
			'show_content_bar' => stripslashes_deep($row['content']),
			'text_msg' => stripslashes_deep($row['msg']),
			'txtcolor' => stripslashes_deep($row['txtcolor']),
			'facebook_check' => stripslashes_deep($row['fb_check']),
			'twitter_check' => stripslashes_deep($row['twi_check']),
			'google_check' => stripslashes_deep($row['plus_check']),
			'show_logo' => stripslashes_deep($row['logo']),
			'upload_img' => stripslashes_deep($row['mediafile']),
		);
//print_r($update);exit;

			if(count($update)){
			$wpdb->update(wp_socialinfo_table,$update,array('id'=>$updateid),array('%d','%d','%d','%s','%s','%d','%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s'));
			//include EMP_DOCROOT.'/views/main.php';
			}
			}
 }
?>