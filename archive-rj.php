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
					<h1 class="size">Vagas no Rio de Janeiro</h1>

					<ul class="box-vagas">
		                <?php

		                    while( have_posts()) : the_post(); ?>
		                    
		                    <li>
		                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p class="data"><?php the_time('d/m/Y'); ?></p>

								<p><?php echo(limit_words(get_the_excerpt(),19)); ?></p> 

								<p class="bt-ver">ver mais</p>
		                    </li>

	                    <?php endwhile; wp_reset_query(); ?>
	                </ul>
				</div>
				
				<div class='box' id='cont-right'>
					<!-- <a href="<?php bloginfo('template_url'); ?>/gerador-de-curriculo" title="Gerador de Currículo" class="bt-curriculo">Gerador de Currículo</a> -->

					<?php include "sidebar-rj.php"; ?>
				</div>

<?php
get_footer();
