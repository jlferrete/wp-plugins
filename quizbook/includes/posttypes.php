<?php

if (! defined('ABSPATH')) {
  exit();
}

function quizbook_post_type() {
    $labels = array(
        'name'                  => _x( 'Quiz', 'Post type general name', 'quizbook' ),
        'singular_name'         => _x( 'Quiz', 'Post type singular name', 'quizbook' ),
        'menu_name'             => _x( 'Quizzes', 'Admin Menu text', 'quizbook' ),
        'name_admin_bar'        => _x( 'Quiz', 'Add New on Toolbar', 'quizbook' ),
        'add_new'               => __( 'Add New', 'quizbook' ),
        'add_new_item'          => __( 'Add New Quiz', 'quizbook' ),
        'new_item'              => __( 'New Quiz', 'quizbook' ),
        'edit_item'             => __( 'Editar Quiz', 'quizbook' ),
        'view_item'             => __( 'Ver Quiz', 'quizbook' ),
        'all_items'             => __( 'Todos Quizzes', 'quizbook' ),
        'search_items'          => __( 'Buscar Quizzes', 'quizbook' ),
        'parent_item_colon'     => __( 'Padre Quizzes:', 'quizbook' ),
        'not_found'             => __( 'No encontrados.', 'quizbook' ),
        'not_found_in_trash'    => __( 'No encontrados.', 'quizbook' ),
        'featured_image'        => _x( 'Imagen Destacada', '', 'quizbook' ),
        'set_featured_image'    => _x( 'Añadir imagen destacada', '', 'quizbook' ),
        'remove_featured_image' => _x( 'Borrar imagen', '', 'quizbook' ),
        'use_featured_image'    => _x( 'Usar como imagen', '', 'quizbook' ),
        'archives'              => _x( 'Quizzes Archivo', '', 'quizbook' ),
        'insert_into_item'      => _x( 'Insertar en Quiz', '', 'quizbook' ),
        'uploaded_to_this_item' => _x( 'Cargado en este Quiz', '', 'quizbook' ),
        'filter_items_list'     => _x( 'Filtrar Quizzes por lista', '”. Added in 4.4', 'quizbook' ),
        'items_list_navigation' => _x( 'Navegación de Quizzes', '', 'quizbook' ),
        'items_list'            => _x( 'Lista de Quizzes', '', 'quizbook' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Quizzes' ),
        'capability_type'    => 'post',
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );

    register_post_type( 'Quizzes', $args );
}

add_action( 'init', 'quizbook_post_type' );

/*
**  Flush Rewrite
*/

function quizbook_rewrite_flush() {
  quizbook_post_type();
  flush_rewrite_rules();
}
