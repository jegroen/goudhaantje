<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function posts_order_wpse_91866() {
    add_post_type_support( 'post', 'page-attributes' );
}

add_action( 'admin_init', 'posts_order_wpse_91866' );


add_filter( 'body_class', 'extra_body_class' );
// Add specific CSS class by filter
function extra_body_class( $classes ) {
    global $post;
    if (is_page())
        $classes[] = $post->post_name;
    return $classes;

}



?>