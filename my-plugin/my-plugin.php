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