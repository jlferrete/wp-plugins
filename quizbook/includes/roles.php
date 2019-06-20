<?php

if (! defined('ABSPATH')) {
  exit();
}

function quizbook_crear_role() {
    add_role('quizbook', 'Quiz');
}

function quizbook_remover_role() {
    remove_role('quizbook', 'Quiz');
}

function quizbook_agregar_capabilities() {

	$roles = array( 'administrator', 'editor', 'quizbook' );

	foreach( $roles as $the_role ) {
		$role = get_role( $the_role );
		$role->add_cap( 'read' );
		$role->add_cap( 'edit_quizzes' );
		$role->add_cap( 'publish_quizzes' );
		$role->add_cap( 'edit_published_quizzes' );
        $role->add_cap( 'edit_others_quizzes' );

	}

	$manager_roles = array( 'administrator', 'editor' );

	foreach( $manager_roles as $the_role ) {
		$role = get_role( $the_role );
		$role->add_cap( 'read_private_quizzes' );
		$role->add_cap( 'edit_others_quizzes' );
		$role->add_cap( 'edit_private_quizzes' );
		$role->add_cap( 'delete_quizzes' );
		$role->add_cap( 'delete_published_quizzes' );
		$role->add_cap( 'delete_private_quizzes' );
		$role->add_cap( 'delete_others_quizzes' );
	}

}

function quizbook_remover_capabilities() {

	$manager_roles = array( 'administrator', 'editor' );

	foreach( $manager_roles as $the_role ) {
		$role = get_role( $the_role );
		$role->remove_cap( 'read' );
		$role->remove_cap( 'edit_quizzes' );
		$role->remove_cap( 'publish_quizzes' );
		$role->remove_cap( 'edit_published_quizzes' );
		$role->remove_cap( 'read_private_quizzes' );
		$role->remove_cap( 'edit_others_quizzes' );
		$role->remove_cap( 'edit_private_quizzes' );
		$role->remove_cap( 'delete_quizzes' );
		$role->remove_cap( 'delete_published_quizzes' );
		$role->remove_cap( 'delete_private_quizzes' );
		$role->remove_cap( 'delete_others_quizzes' );
	}

}
