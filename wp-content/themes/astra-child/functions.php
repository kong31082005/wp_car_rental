<?php
// Kích hoạt CSS của theme mẹ
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Code hiện tên người dùng
add_shortcode('user_name', function() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        return esc_html($current_user->display_name);
    }
    return '';
});

// Cho phép dùng shortcode trong Header của Astra
add_filter( 'astra_get_dynamic_header_content', 'do_shortcode' );