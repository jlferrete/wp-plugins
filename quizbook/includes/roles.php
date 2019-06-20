<?php

function quizbook_crear_role() {
    add_role('quizbook', 'Quiz');
}

function quizbook_remover_role() {
    remove_role('quizbook', 'Quiz');
}
