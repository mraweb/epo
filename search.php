<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
				<div class='box' id='cont-left'>
					<h1 class="size"><?php printf( __( 'Busca por: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>

					<ul class="box-vagas">
		                <?php

		                    while( have_posts()) : the_post(); ?>
		                    
		                    <li>
		                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p class="data"><?php the_time('d/m/Y'); ?></p>

								<p><?php echo(limit_words(get_the_excerpt(),15)); ?></p> 

								<p class="bt-ver">ver mais</p>
		                    </li>

	                    <?php endwhile; wp_reset_query(); ?>
	                </ul>
				</div>
				
				<?php if( function_exists( 'findSidebar' ) ) { ?>
					
					<div class='box' id='cont-right'>
					
						<?php get_sidebar(); ?>

					</div>	
						
				<?php } ?>
					
<?php
get_footer();