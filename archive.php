<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
				<div class='box' id='cont-left'>
					<h1 class="size">
						<?php
							the_taxonomies( array(

							  'template' => '%s: %l'

							) );
						?>
					</h1>

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
					
						<p><?php findSidebar(); ?></p>

					</div>	
						
				<?php } ?>
					
<?php
get_footer();