<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div class='box' id='cont-left'>
        <h1 class="size"><?php the_title(); ?></h1>

        <div class="redes-sociais">
            <div>
                <div class="fb-like" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false"></div>
            </div>
            
            <div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt" data-via="">Tweetar</a>
                <script type="text/javascript">
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                </script>
            </div>
            
            <div class="g-plusone" data-size="medium"></div>
        </div>

        <div class="cont-post">
            <a href="javascript:history.back(-1);" title="Voltar" class="bt-voltar">Voltar</a>
            
            <?php
            	the_post();
            	the_content();
            ?>
        </div><!-- FINAL CONT-POST -->

        <div class="tit-vagas"><h2><span>Vagas</span> Relacionadas</h2></div>

        <ul class="box-vagas">
			<?php
            $newsArgs = array( 'post_type' => 'rio-de-janeiro', 'orderby' => 'rand', 'posts_per_page' => 3);
            $newsLoop = new WP_Query($newsArgs);  

            while($newsLoop->have_posts()) : $newsLoop->the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <p class="data"><?php the_time('d/m/Y'); ?></p>

                    <p><?php echo(limit_words(get_the_excerpt(),15)); ?></p> 

                    <p class="bt-ver">ver mais</p>
                </li>
            <?php endwhile; ?>
        </ul>
    </div><!-- FINAL CONT-LEFT -->

    <div class='box' id='cont-right'>
        <a href="<?php bloginfo('template_url'); ?>/gerador-de-curriculo" title="Gerador de Currículo" style="width: 236px; height: 74px; margin: 0 auto;"><img src="<?php bloginfo('template_directory'); ?>/img/btgerador.png" alt="Gerador de Currículo"></a>

        <?php include "sidebar-rj.php"; ?>
    </div>

<?php
get_footer();