<?php
get_header(); ?>

				<div class='box' id='cont-left'>
					<h1 class="size"><?php the_title(); ?></h1>

					<ul class="box-vagas">
		                <?php
		                    $newsArgs = array( 'post_type' => 'rio-de-janeiro');
		                    $newsLoop = new WP_Query($newsArgs);  

		                    while($newsLoop->have_posts()) : $newsLoop->the_post(); ?>
		                    
		                    <li>
		                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p class="data"><?php the_time('d/m/Y'); ?></p>

								<p><?php echo(limit_words(get_the_excerpt(),19)); ?></p> 

								<p class="bt-ver">ver mais</p>
		                    </li>

		                    <?php endwhile; ?>
		                </ul>
				</div>

				<div class='box' id='cont-right'>
					<a href="<?php bloginfo('template_url'); ?>/gerador-de-curriculo" title="Gerador de Currículo" class="bt-gera hidetxt">Gerador de Currículo</a>

					<?php get_sidebar(); ?>
				</div>

<?php
get_footer();
?>