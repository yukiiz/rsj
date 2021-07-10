<?php
function disable_unnecessary() {
    //絵文字削除
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    //コメントのフィードなどの表示削除
    remove_action('wp_head', 'feed_links_extra', 3);
    //ブログ投稿ツールのためのタグ削除
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    //WordPressのバージョンの表示削除
    remove_action('wp_head', 'wp_generator');
    //rel=”canonical”タグの表示削除
    remove_action('wp_head', 'rel_canonical');
    //短縮URLの表示削除
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action( 'init', 'disable_unnecessary' );
//jQueryの読み込み無効
function delete_local_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '/../common_lp/js/jquery.js', array(), '3.4.1');
}
add_action( 'wp_enqueue_scripts', 'delete_local_jquery' );
//セキュリティ：ユーザー名を非表示
function theme_slug_redirect_author_archive() {
    if (is_author() ) {
        wp_redirect( home_url());
        exit;
    }
}
add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );
//固定ページビジュアルエディタ無効
function disable_visual_editor_in_page() {
    global $typenow;
    if( $typenow == 'page' ){
        add_filter('user_can_richedit', 'disable_visual_editor_filter');
    }
}
function disable_visual_editor_filter(){
    return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');
//エディタの変換機能を無効化
remove_filter( 'the_content', 'wptexturize' );
//固定ページの親ページを判別して条件分岐
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}