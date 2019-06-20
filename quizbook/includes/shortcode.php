<?php

if (! defined('ABSPATH')) exit();

/*
* Crea un shorcode, uso: [quizbook]
*/

function quizbook_shortcode( ) {
    echo "Desde shortcode";
}
add_shortcode( 'quizbook', 'quizbook_shortcode' );
