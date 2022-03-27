<?php
/*
Hàm khai báo chức năng
 */

function asiavinafans_theme_setup()
{
    //Load textdomain thiết lập
    load_theme_textdomain('asiavinafans');

    //Đăng kí menus
    register_nav_menu('menu-header', __('Menu header', 'asiavinafans'));

    //Chuyển về trình soạn thảo phiên bản cũ
    add_filter('use_block_editor_for_post', '__return_false');

    //Tự động thêm title cho mỗi trang
    add_theme_support('title-tag');

    //Đăng kí widgets
    if (function_exists('register_sidebar')) {
        /**
         * Creates a sidebar
         * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
         */
        $args = array(
            'name' => __('search', 'asiavinafans'),
            'id' => 'search',
            'description' => 'search box',
            'class' => 'search-box',
        );

        register_sidebar($args);

    }
    //Đăng kí widgets
    if (function_exists('register_sidebar')) {
        /**
         * Creates a sidebar
         * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
         */
        $args = array(
            'name' => __('search', 'asiavinafans'),
            'id' => 'search',
            'description' => 'search box',
            'class' => 'search-box',
        );

        register_sidebar($args);

    }
    if (function_exists('register_sidebar')) {
        /**
         * Creates a sidebar
         * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
         */
        $args = array(
            'name' => __('form', 'asiavinafans'),
            'id' => 'form-contacts',
            'description' => 'form-contacts',
            'class' => 'form-contacts',
        );

        register_sidebar($args);

    }
	if (!function_exists('thachpham_pagination')) {
		function thachpham_pagination()
		{
			/*
			 * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
			 */
			if ($GLOBALS['wp_query']->max_num_pages < 2) {
				return ”;
			}
			?>
		<nav class="pagination" role="navigation">
			<?php if (get_next_post_link()): ?>
			<div class="prev"><?php next_posts_link(__('Older Posts', 'asiavinafans'));?></div>
			<?php endif;?>
			<?php if (get_previous_post_link()): ?>
			<div class="next"><?php previous_posts_link(__('Newer Posts', 'asiavinafans'));?></div>
			<?php endif;?>
		</nav><?php
		}
	}

}
add_action('init', 'asiavinafans_theme_setup');



/*
Đặt code này vào file functions.php của theme 
Tác giả: klihelp
Fixed by: alexandreleroux
Chức năng: hiển thị phân trang cho sản phẩm WooCommerce khi dùng shortcode riêng lẻ
*/

if ( ! is_admin() ) {
// ---------------------- FRONTPAGE -------------------

if ( defined('WC_VERSION') ) {
// ---------------------- WooCommerce active -------------------
  

   	/**
	* Set Pagination for shortcodes custom loop on single-pages.
  	* @uses $woocommerce_loop;
  	*/
  	add_action( 'pre_get_posts', 'kli_wc_pre_get_posts_query' ); 
  	function kli_wc_pre_get_posts_query( $query ) {
  		global $woocommerce_loop;
  	
	  	// Get paged from main query only
	  	// ! frontpage missing the post_type
	  	if ( is_main_query() && ( $query->query['post_type'] == 'product' ) || ! isset( $query->query['post_type'] ) ){
	  
		  if ( isset($query->query['paged']) ){
  			$woocommerce_loop['paged'] = $query->query['paged'];
		  }
	  	}
	  
  		if ( ! $query->is_post_type_archive || $query->query['post_type'] !== 'product' ){
		  	return;
	  	}
  		
  		$query->is_paged = true;
  		$query->query['paged'] = $woocommerce_loop['paged'];
  		$query->query_vars['paged'] = $woocommerce_loop['paged'];
  	}
  
	/** Prepare Pagination data for shortcodes on pages
  	* @uses $woocommerce_loop;
	**/
	add_action( 'loop_end', 'kli_query_loop_end' ); 
	function kli_query_loop_end( $query ) {
		
		if ( ! $query->is_post_type_archive || $query->query['post_type'] !== 'product' ){
			return;
		}
		
		// Cache data for pagination
		global $woocommerce_loop;
		$woocommerce_loop['pagination']['paged'] = $woocommerce_loop['paged'];
		$woocommerce_loop['pagination']['found_posts'] = $query->found_posts;
		$woocommerce_loop['pagination']['max_num_pages'] = $query->max_num_pages;
		$woocommerce_loop['pagination']['post_count'] = $query->post_count;
		$woocommerce_loop['pagination']['current_post'] = $query->current_post;

	}


	/**
	* Pagination for shortcodes on single-pages 
	* @uses $woocommerce_loop;
	*/
	add_action( 'woocommerce_after_template_part', 'kli_wc_shortcode_pagination' ); 
	function kli_wc_shortcode_pagination( $template_name ) {

		if ( ! ( $template_name === 'loop/loop-end.php' && is_page() ) ){
			return;
		}

		global $wp_query, $woocommerce_loop;

		if ( ! isset( $woocommerce_loop['pagination'] ) ){
			return;
		}

		$wp_query->query_vars['paged'] = $woocommerce_loop['pagination']['paged'];
		$wp_query->query['paged'] = $woocommerce_loop['pagination']['paged'];
		$wp_query->max_num_pages = $woocommerce_loop['pagination']['max_num_pages'];
		$wp_query->found_posts = $woocommerce_loop['pagination']['found_posts'];
		$wp_query->post_count = $woocommerce_loop['pagination']['post_count'];
		$wp_query->current_post = $woocommerce_loop['pagination']['current_post'];
 
		// Custom pagination function or default woocommerce_pagination()
		kli_woocommerce_pagination();
	}	

	/**
	* Custom pagination for WooCommerce instead the default woocommerce_pagination()
	* @uses plugin Prime Strategy Page Navi, but added is_singular() on #line16
	**/
	remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
	add_action( 'woocommerce_after_shop_loop', 'kli_woocommerce_pagination', 10);
	function kli_woocommerce_pagination() {
		woocommerce_pagination(); 
	}



}/*woocommerce*/
}/*frontpage*/

