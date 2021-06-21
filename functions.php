<?php

add_action('after_setup_theme', 'wpdocs_theme_setup');

function wpdocs_theme_setup()
{
    load_theme_textdomain('legalizebelarus', get_template_directory() . '/languages');
}

require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

function themebs_enqueue_styles()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('core', get_template_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts()
{
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'themebs_enqueue_scripts');

add_theme_support('post-thumbnails', array('post', 'page'));

function set_default_meta($post_ID)
{
    $post_meta_labels = array("author", "custom_license");
    $default_metas = array("Legalize Belarus", "0");

    for ($i = 0; $i <= count($post_meta_labels); $i++) {
        $current_field_value = get_post_meta($post_ID, $post_meta_labels[$i], true);
        $default_meta = $default_metas[$i];

        if ($current_field_value == '' && !wp_is_post_revision($post_ID)) {
            add_post_meta($post_ID, $post_meta_labels[$i], $default_meta, true);
        }
    }
    return $post_ID;
}

add_action('wp_insert_post', 'set_default_meta');


function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

if (function_exists('register_sidebar'))
    register_sidebar(array(
            'name' => 'posts-sidebar',
            'before_widget' => '
<div class="widgetizedArea py-1">',
            'after_widget' => '
</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );

if (function_exists('register_sidebar'))
    register_sidebar(array(
            'name' => 'main-sidebar',
            'before_widget' => '
<div class="widgetizedArea py-1">',
            'after_widget' => '
</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );


add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');


function limit_posts_per_archive_page()
{
    if (is_category()) {
        $limit = 5;
    } elseif (is_search())
        $limit = 5;
    else
        $limit = get_option('posts_per_page');

    set_query_var('posts_per_archive_page', $limit);
}

add_filter('pre_get_posts', 'limit_posts_per_archive_page');


function filter_pre_handle_404($preempt, $wp_query)
{
    if (isset($wp_query->query['page']) && $wp_query->query['page']) {
        return true;
    }

    return $preempt;
}

add_filter('pre_handle_404', 'filter_pre_handle_404', 10, 2);


function aj_modify_posts_per_page($query)
{
    if ($query->is_search()) {
        $query->set('posts_per_page', '25');
    }
}

add_action('pre_get_posts', 'aj_modify_posts_per_page');

?>
