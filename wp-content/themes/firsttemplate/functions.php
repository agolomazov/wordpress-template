<?php

/**
 *  Функция правильно проставляет ссылки до скриптов и таблиц стилей
 */
function load_script(){
    wp_enqueue_script('jquery_my', get_template_directory_uri().'/js/jquery-1.10.1.min.js');
    wp_enqueue_script('jqFancyTransitions_my', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');
}

/**
 *  Функция правильно прописывает пути к таблицам стилей
 */
function load_styles(){
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
}

/**
 *  Функция вместо [...] устанавливает ... при обрезке текста поста
 *  при выводе его в списке
 *
 * @param $more
 * @return string
 */
function new_excerpt_more($more) {
    return '...';
}

/**
 *  Загружаем скрипты и стили
 */

add_action('wp_footer', 'load_script');
add_action('wp_head', 'load_styles');
add_filter('excerpt_more', 'new_excerpt_more');

// Включаем поддержку миниатюр
add_theme_support( 'post-thumbnails' );
// Устанавливаем размер миниатюр по умолчанию
set_post_thumbnail_size( 180, 180 );

/**
 *  Добавление поддержки виджетов в шаблоне
 */

register_sidebar(array(
    'name' => 'Меню',
    'id'   => 'menu_header',
    'before_title' => '',
    'after_title' => '',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => 'Сайдбар',
    'id'   => 'sidebar',
    'before_widget' => '<div class="sidebar-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

register_sidebar(array(
    'name' => 'Футер',
    'id'   => 'footer',
    'before_widget' => '<div class="footer-info %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
