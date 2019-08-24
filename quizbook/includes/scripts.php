<?php

/**
 * Agrega estilos y JS al Front End
 */

function quizbook_frontend_styles() {
    wp_enqueue_style('quizbook_css', plugins_url('../assets/css/quizbook.css', __FILE__ ) );

    wp_enqueue_script('quizbookjs', plugins_url('../assets/js/quizbook.js', __FILE__), array('jquery'), 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'quizbook_frontend_styles');


/**
 * Agrega estilos y JS al Admin cuando se crea un Quiz
 */

function quizbook_styles($hook) {

    global $post;

    if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
        if ( $post->post_type === 'quizzes' ) {
            wp_enqueue_style('quizbookcss', plugins_url('../assets/css/admin-quizbook.css', __FILE__));
        }
    }
}
add_action('admin_enqueue_scripts', 'quizbook_styles', 10, 1);