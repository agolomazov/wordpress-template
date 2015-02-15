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
 *  Загружаем скрипты и стили
 */

add_action('wp_footer', 'load_script');
add_action('wp_head', 'load_styles');

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