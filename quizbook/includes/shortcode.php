<?php

if (! defined('ABSPATH')) exit();

/*
* Crea un shorcode, uso: [quizbook preguntas="" orden=""]
*/

function quizbook_shortcode( $atts ) {
	
	$args = array(
		'post_type' => 'quizzes',
		'posts_per_page' => $atts['preguntas'],
		'orderby' => $atts['orden']
	);
	$quizbook = new WP_Query($args); ?>
	<form name="quizbook_enviar" id="quizbook_enviar">
		<div id="quizbook" class="quizbook">
			<ul>
			<?php while($quizbook->have_posts()): $quizbook->the_post(); ?>
				<li>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>

					<?php
						$opciones = get_post_meta(get_the_ID());
						foreach( $opciones as $llave => $opcion) {
							$resultado = quizbook_filtrar_funciones($llave);
							$numero = explode('_', $llave);

							if( $resultado === 0 ) { ?>

								<div id="<?php echo get_the_ID() . ":" . $numero[2]; ?>" class="respuesta">
									<?php echo $opcion[0] ?>
								</div>
							
							<?php

							}

						}
					?>
				</li>
	
			<?php endwhile; ?>
			</ul>
		</div> <!--#quizbook-->
	
		<input type="submit" value="Enviar" id="quizbook_btn_submit">
	
		<div id="quizbook_resultado"></div>
	</form><!--form-->
	<?php wp_reset_postdata();
	    
}
add_shortcode( 'quizbook', 'quizbook_shortcode' );
