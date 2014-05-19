<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div class='box' id='cont-left'>
		<h1>ERRO 404 - Página não Encontrada</h1>

		<p>A página que você procura não pode ser encontrada, navegue pelo menu abaixo para achar uma vaga no seu estado correspondente.</p>
		
		<div id="menu-erro">
			<?php wp_nav_menu( array('menu' => 'Empresa' )); ?>
		</div>
		
	</div>

	<div class='box' id='cont-right'>
		<p class="titulo-aside">Vagas <span>de Emprego</span></p>
		
		<?php include 'sidebar-empresa.php'; ?>
	</div>

<?php
get_footer();
