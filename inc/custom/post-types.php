<?php
function create_services_post_type() {
    $labels = array(
        'name'               => 'Услуги',
        'singular_name'      => 'Услуга',
        'menu_name'          => 'Услуги',
        'name_admin_bar'     => 'Услуги',
        'add_new'            => 'Добавить услугу',
        'add_new_item'       => 'Добавить новую услугу',
        'new_item'           => 'Новая услуга',
        'edit_item'          => 'Редактировать услугу',
        'view_item'          => 'Просмотр услуги',
        'all_items'          => 'Все услуги',
        'search_items'       => 'Найти услуги',
        'not_found'          => 'Услуги не найдены',
        'not_found_in_trash' => 'В корзине не найдено услуг',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => true,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'menu_icon'          => get_template_directory_uri() . '/assets/images/icons/service_icon.png', // Иконка в меню админки
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'create_services_post_type' );


function create_services_taxonomy() {
    $labels = array(
        'name'              => 'Категории',
        'singular_name'     => 'Категория',
        'search_items'      => 'Найти категории',
        'all_items'         => 'Все категории',
        'parent_item'       => 'Родительская категория',
        'parent_item_colon' => 'Родительская категория:',
        'edit_item'         => 'Редактировать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить новую категорию',
        'new_item_name'     => 'Название новой категории',
        'menu_name'         => 'Категории',
    );

    $args = array(
        'hierarchical'      => true, // Древовидная таксономия
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'services-category' ),
    );

    register_taxonomy( 'services_category', array( 'services' ), $args );
}
add_action( 'init', 'create_services_taxonomy' );
