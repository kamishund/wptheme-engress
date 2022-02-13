<?php
add_filter( 'show_admin_bar', '__return_false' );
add_theme_support( 'post-thumbnails' );

function post_has_archive($args, $post_type)
{

    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blogs'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*
 * デフォルト「投稿」→「ブログ」。
 */

function change_post_menu_label() {

	global $menu;
	global $submenu;
	$menu[5][0] = 'ブログ';
	$submenu['edit.php'][5][0] = 'ブログ一覧';
	$submenu['edit.php'][10][0] = '新しいブログ';
	$submenu['edit.php'][16][0] = 'タグ';

}

function change_post_object_label() {

	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'ブログ';
	$labels->singular_name = 'ブログ';
	$labels->add_new = _x('追加', 'ブログ');
	$labels->add_new_item = 'ブログの新規追加';
	$labels->edit_item = 'ブログの編集';
	$labels->new_item = '新規ブログ';
	$labels->view_item = 'ブログを表示';
	$labels->search_items = 'ブログを検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';

}

add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    /* アーカイブページの時に表示件数を10件にセット */
    if ( $query->is_archive() ) {
        $query->set( 'posts_per_page', '10' );
    }
    /* ポストアーカイブの時に表示件数を30件にセット */
   if ( $query->is_post_type_archive() ) {
        $query->set( 'posts_per_page', '10' );
    }
    /* 検索ページの時に表示件数を20件にセット */
    if ( $query->is_search() ) {
        $query->set( 'posts_per_page', '10' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//画像キャプションで出力される不要なwidthスタイルを削除
function my_img_caption_shortcode($attr, $content = null) {
	if ( ! isset( $attr['caption'] ) ) {
	  if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
		$content = $matches[1];
		$attr['caption'] = trim( $matches[2] );
	  }
	}
  
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
	  return $output;
	  extract(shortcode_atts(array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	), $attr, 'caption'));
  
	if ( 1 > (int) $width || empty($caption) )
	  return $content;
  
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
  
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
  }
  add_shortcode('caption', 'my_img_caption_shortcode');