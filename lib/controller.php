<?php

function socialplugin_menu() {
add_menu_page('FBar Social', 'FBar Social', 'administrator', 'slugesetting', 'socialplugin_main',plugins_url( "fb.png", __FILE__ ));
}
	function socialplugin_main () {
	# Insert data
	// if (isset($_POST['social_insert_data'])) {
	// socialinfo_TABLE::insert($_POST);

	// } 
	if(isset($_POST['social_update_id'])){
	socialinfo_Table::update($_POST);
	}
			
	# Get data
	$name_data = socialinfo_Table::get();
	include EMP_DOCROOT . '/views/main.php';
}
?>