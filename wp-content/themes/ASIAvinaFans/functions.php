<?php 
/*
Hàm khai báo chức năng
 */


function asiavinafans_theme_setup(){
		//Load textdomain thiết lập
	load_theme_textdomain( 'asiavinafans' );

		//Đăng kí menus
	register_nav_menu('menu-header',__( 'Menu header', 'asiavinafans' ));

	//Chuyển về trình soạn thảo phiên bản cũ
	add_filter('use_block_editor_for_post', '__return_false');

	// Tự động thêm tiêu đề cho mỗi trang
	add_theme_support( 'title-tag' );
}
add_action( 'init', 'asiavinafans_theme_setup' );

