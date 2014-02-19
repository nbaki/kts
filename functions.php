<?php
//var_dump(curPageURL());exit;
if (strpos($_SERVER['SERVER_NAME'], 'sourendev') !== false) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

add_filter('show_admin_bar', '__return_false');
function get_childTheme_url() {
    return dirname( get_bloginfo('stylesheet_url') );
}

function getPageContent($id) {
    $post = get_page($id);
    $content = '';
    if ($post) {
        $content = apply_filters('the_content', $post->post_content);
        $content = str_replace(']]>', ']]>', $content);
    }
    return $content;
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Content Widget Area',
        'id'   => 'nav-widgets',
        'description'   => 'Content Widget Area',
        'before_widget' => '<div class="nav-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
}

function register_my_menus() {
    register_nav_menus(array('main-menu'=> __('Navvy')));
}
add_action('init', 'register_my_menus');

function getPermalinkForPage($page_title) {
    $page = get_page_by_title($page_title);
    return get_permalink($page->ID);
}

add_theme_support('html5', array('search-form'));