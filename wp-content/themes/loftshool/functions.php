<?php

add_action('wp_enqueue_scripts', 'loft_scripts');

function loft_scripts()
{
    wp_enqueue_style('libs', get_stylesheet_directory_uri() . '/css/libs.min.css', array(), time());
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), time());
    wp_enqueue_style('media', get_stylesheet_directory_uri() . '/css/media.css', array(), time());

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), time(), true);
}

register_nav_menus(
    array(
        'head_menu' => 'header',
        'footer_menu' => 'footer'
    )
);

add_theme_support('post-thumbnails');

function true_register_wp_sidebars()
{

    register_sidebar(
        array(
            'id' => 'true_side',
            'name' => 'Боковая колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div class="sidebar__sidebar-item">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-item__title">',
            'after_title' => '</div>'
        )
    );

    register_sidebar(
        array(
            'id' => 'header_search',
            'name' => 'Поиск',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div class="bottom-header"><div class="search-form-wrap">',
            'after_widget' => '</div></div>'
        )
    );
}

add_action('widgets_init', 'true_register_wp_sidebars');

function create_posttype()
{
    register_post_type(
        'news',
        array(
            'labels' => array(
                'name' => __('Новости'),
                'singular_name' => __('Новость')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
        )
    );
}

add_action('init', 'create_posttype');
