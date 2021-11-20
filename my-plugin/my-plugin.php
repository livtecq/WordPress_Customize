<?php
/*
* Plugin Name: マイプラグイン
* Version: 1.0
* Description: 自分専用
* Author: livtecq
*/

// ショートコードを記述する。
add_shortcode('date', function() {
	return get_the_title();
	// return date('Y年 n月 j日 H:i:s');
});

// アクションフックとは

// add_action('get_header', function() {
//     echo 'アクションフックが動作しました';
// });

add_action('get_footer', function() {
    echo 'アクションフックが動作しました';
});

// フィルターフックとは
add_filter('the_title', function($title) {
    return '□' . $title; // フィルターフックでは必ずreturnする必要がある。
});