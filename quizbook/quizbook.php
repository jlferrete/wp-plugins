<?php
/*
Plugin Name: Quizbook
Version: 0.1
Plugin URI:
Description: Plugin para añadir quizzes o cuestionarios con Wordpress
Author: Jlferrete
Author URI:
License: GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: quizbook
*/

/*
*   Añade el Post de Quizzes
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/posttypes.php';

/*
*   Regenera las reglas de las URL al activar
*/
register_activation_hook( __FILE__, 'quizbook_rewrite_flush' );

/*
*   Añade Metaboxes a los Quizzes
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/metaboxes.php';

/*
*   Añade Roles y Capabilities a Quizzies
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
register_activation_hook( __FILE__ , 'quizbook_crear_role' );
register_deactivation_hook( __FILE__ , 'quizbook_remover_role'  );
/*
*   Añade Capabilities a Quizzies
*/
register_activation_hook( __FILE__, 'quizbook_agregar_capabilities' );
register_deactivation_hook( __FILE__, 'quizbook_remover_capabilities' );
