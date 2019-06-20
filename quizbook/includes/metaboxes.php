<?php

if (! defined('ABSPATH')) {
  exit();
}

function quizbook_agregar_metaboxes() {
  //Agrega el metabox a quizzes
  add_meta_box( 'quizbook_meta_box', 'Respuestas', 'quizbook_metaboxes', 'Quizzes', 'normal', 'high', null );

}
add_action('add_meta_boxes', 'quizbook_agregar_metaboxes');

/*
*   Muestra el contenido del HTML de los metaboxes
*/
function quizbook_metaboxes() { ?>
   <table class="form-table">
       <tr>
           <th class="row-title" colspan="2">
               <h2>Añade las respuestas aquí</h2>
           </th>
       </tr>
       <tr>
           <th class="row-title">
               <label for="respuesta_a">a)</label>
           </th>
           <td>
               <input id="respuesta_a" name="qb_respuesta_a" class="regular-text" type="text" >
           </td>
       </tr>
       <tr>
           <th class="row-title">
               <label for="respuesta_b">b)</label>
           </th>
           <td>
               <input id="respuesta_b" name="qb_respuesta_b" class="regular-text" type="text">
           </td>
       </tr>
       <tr>
           <th class="row-title">
               <label id="respuesta_c">c)</label>
           </th>
           <td>
               <input id="respuesta_c" name="qb_respuesta_c" class="regular-text" type="text">
           </td>
       </tr>
       <tr>
           <th class="row-title">
               <label id="respuesta_d">d)</label>
           </th>
           <td>
               <input id="respuesta_d" name="qb_respuesta_d" class="regular-text" type="text">
           </td>
       </tr>
       <tr>
           <th class="row-title">
               <label id="respuesta_e">e)</label>
           </th>
           <td>
               <input id="respuesta_e" name="qb_respuesta_e" class="regular-text" type="text">
           </td>
       </tr>
       <tr>
           <th class="row-title">
               <label for="respuesta_correcta">Respuesta Correcta</label>
           </th>
           <td>
               <select name="quizbook_correcta" id="respuesta_correcta" class="postbox">
                   <option value="">Elige la respuesta correcta</option>
                   <option value="qb_correcta:a">a</option>
                   <option value="qb_correcta:b">b</option>
                   <option value="qb_correcta:c">c</option>
                   <option value="qb_correcta:d">d</option>
                   <option value="qb_correcta:e">e</option>
               </select>
           </td>
       </tr>
    </table>

<?php
}

function quizbook_guardar_metaboxes($post_id, $post, $update) {

     $respuesta_a = $respuesta_b = $respuesta_c = $respuesta_d = $respuesta_e = '';


     if(isset( $_POST['qb_respuesta_a'] ) ) {
       $respuesta_a = sanitize_text_field($_POST['qb_respuesta_a']);
     }
     update_post_meta($post_id, 'qb_respuesta_a', $respuesta_a );

     if(isset($_POST['qb_respuesta_b'])) {
       $respuesta_b = sanitize_text_field($_POST['qb_respuesta_b']);
     }
     update_post_meta($post_id, 'qb_respuesta_b', $respuesta_b );

     if(isset($_POST['qb_respuesta_c'])) {
       $respuesta_c = sanitize_text_field($_POST['qb_respuesta_c']);
     }
     update_post_meta($post_id, 'qb_respuesta_c', $respuesta_c );

     if(isset($_POST['qb_respuesta_d'])) {
       $respuesta_d = sanitize_text_field($_POST['qb_respuesta_d']);
     }
     update_post_meta($post_id, 'qb_respuesta_d', $respuesta_d );

     if(isset($_POST['qb_respuesta_e'])) {
       $respuesta_e = sanitize_text_field($_POST['qb_respuesta_e']);
     }
     update_post_meta($post_id, 'qb_respuesta_e', $respuesta_e );

     if(isset($_POST['quizbook_correcta'])) {
       $correcta = sanitize_text_field($_POST['quizbook_correcta']);
     }
     update_post_meta($post_id, 'quizbook_correcta', $correcta );
}

add_action('save_post', 'quizbook_guardar_metaboxes', 10, 3);
