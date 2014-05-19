<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
    if( get_post_type() == 'rio-de-janeiro' ):
        get_template_part('single','rj');
    endif;

    if( get_post_type() == 'sao-paulo' ):
        get_template_part('single','sp');
    endif;

    if( get_post_type() == 'minas-gerais' ):
        get_template_part('single','mg');
    endif;

    if( get_post_type() == 'amazonas' ):
        get_template_part('single','am');
    endif;

    if( get_post_type() == 'bahia' ):
        get_template_part('single','ba');
    endif;

    if( get_post_type() == 'ceara' ):
        get_template_part('single','ce');
    endif;

    if( get_post_type() == 'distrito-federal' ):
        get_template_part('single','df');
    endif;

    if( get_post_type() == 'espirito-santo' ):
        get_template_part('single','es');
    endif;

    if( get_post_type() == 'maranhao' ):
        get_template_part('single','ma');
    endif;

    if( get_post_type() == 'pernambuco' ):
        get_template_part('single','pe');
    endif;

    if( get_post_type() == 'rondonia' ):
        get_template_part('single','ro');
    endif;
	
    if( get_post_type() == 'series' ):
        get_template_part('single','series');
    endif;	
 
    if( get_post_type() == 'post' ): // Se o post type foi post
        get_template_part('single','padrao'); // Vai carregar o arquivo single-padrao.php
    endif;
?>
<?php
get_footer();
?>
