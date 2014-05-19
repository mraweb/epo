<?php
/* Template Name: Vagas MG */

get_header(); ?>
				<div class='box' id='cont-left'>
				
					<h1 class="size"><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<ul class="box-vagas">
						<?php
						$args = array(
							'post_type' => 'minas-gerais',
							'paged'     => $paged
					    );

						$temp     = $wp_query;
						$wp_query = null;
						$wp_query = new WP_Query( $args );

						while ( $wp_query -> have_posts() ) : 
							$wp_query -> the_post();
						?>
						<li>
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						
							<p class="data"><?php the_time('d/m/Y'); ?></p>
							<p><?php echo(limit_words(get_the_excerpt(),15)); ?></p> 
							<p class="bt-ver">ver mais</p>
						</li>
						<?php endwhile; ?>
					</ul>

					<?php
  						if( function_exists( 'wp_pagenavi' ) ) wp_pagenavi();
	  
						$wp_query = null; 
						$wp_query = $temp; 
					?>
				</div>

				<div class='box' id='cont-right'>
					<a href="<?php bloginfo('template_url'); ?>/gerador-de-curriculo" title="Gerador de Currículo" style="width: 236px; height: 74px; margin: 0 auto;"><img src="<?php bloginfo('template_directory'); ?>/img/btgerador.png" alt="Gerador de Currículo"></a>

					<?php include "sidebar-mg.php"; ?>
				</div>

<?php
get_footer();