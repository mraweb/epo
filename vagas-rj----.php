<?php
/* Template Name: Vagas RJ */

get_header(); ?>
				<div class='box' id='cont-left'>
					<h1 class="size"><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<ul class="box-vagas">
					<?php
					  	$type = 'rio-de-janeiro';
					  	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					  	$args=array(
					    	'post_type' => $type,
					    	'post_status' => 'publish',
					    	'paged' => $paged,
					    	'posts_per_page' => 3,
					    	'caller_get_posts'=> 1
					  	);
					  	$temp = $wp_query;  // assign original query to temp variable for later use
					  	$wp_query = null;
					  	$wp_query = new WP_Query();
					  	$wp_query->query($args);
					?>
						
					<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
					    
					    <li>
					        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<p class="data"><?php the_time('d/m/Y'); ?></p>

							<p><?php echo(limit_words(get_the_excerpt(),15)); ?></p> 

							<p class="bt-ver">ver mais</p>
					    </li>

					<?php endwhile; endif; ?>
					</ul>

					<?php
					if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
					$wp_query = null; $wp_query = $temp;
					?>
				</div>

				<div class='box' id='cont-right'>
					<!-- <a href="<?php bloginfo('template_url'); ?>/gerador-de-curriculo" title="Gerador de Currículo" class="bt-curriculo">Gerador de Currículo</a> -->

					<?php include "sidebar-rj.php"; ?>
					
				</div>

<?php
get_footer();