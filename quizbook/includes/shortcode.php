<?php

if (! defined('ABSPATH')) exit();

/*
* Crea un shorcode, uso: [quizbook]
*/

function quizbook_shortcode( ) {
	
	$args = array(
		'post_type' => 'quizes',
	);
	$quizbook = new WP_Query($args); ?>
	<form name="quizbook_enviar" id="quizbook_enviar">
		<div id="quizbook" class="quizbook">
			<ul>
			<?php while($quizbook->have_posts()): $quizbook->the_post(); ?>
				<li data-pregunta="<?php echo get_the_ID(); ?>">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
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
