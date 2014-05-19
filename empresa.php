<?php
/* Template Name: Quem Somos */

get_header(); ?>

				<div class='box' id='cont-left'>
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile;
					?>
				</div>

				<div class='box' id='cont-right'>
					<p class="titulo-aside">Vagas <span>de Emprego</span></p>
					
					<?php include 'sidebar-empresa.php'; ?>
				</div>

<?php
get_footer();
