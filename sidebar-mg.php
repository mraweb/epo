<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
    <div class="search">
        <form id="uwpqsffrom_110" method="get" action="http://www.empregopraontem.com.br">
            <div class="bg-label"><label class="screen-reader-text">Buscar</label></div>

            <input id="uwpqsf_id_key" type="text" name="skeyword" class="uwpqsftext" value="" />
            <input type="image" src="<?php bloginfo( 'template_url' ); ?>/img/btbusca.jpg" name="Buscar" alt="Buscar" id="searchsubmit" />

            <input type="hidden" name="unonce" value="cac164d024" />
            <input type="hidden" name="uformid" value="110">
            <input type="hidden" name="s" value="uwpsfsearchtrg" />
        </form>
    </div>

    <?php dynamic_sidebar( 'minas-gerais' ); ?>

    <div class="box-cat">
        <div><h3>NEWSLETTER</h3></div>

        <p>Assine nossa newsletter e receba as vagas no seu e-mail.</p>

        <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=mg-epo', 'popupwindow', 'scrollbars=yes,width=300');return true">

            <input type="text" name="email" style="width: 254px; height: 34px; border-right: 1px solid #b2b2b2; border-left: 1px solid #b2b2b2; border-top: 1px solid #b2b2b2; border-bottom: 1px solid #b2b2b2; background-color: #FFF; margin-bottom: 10px; padding: 0 5px; font-size: 20px; color: #b2b2b2; outline: none;" />

            <input type="hidden" value="mg-epo" name="uri"/>

            <input type="hidden" name="loc" value="pt_BR"/>

            <input type="image" src="<?php bloginfo('template_directory'); ?>/img/btcadastrese.jpg" alt="Cadastre-se" name="Cadastre-se" class="btcadastrese">
        </form>
    </div>

	<div class="box-cat">
		<div><h3>Categorias</h3></div>
        
        <ul>
		  <?php wp_list_categories('taxonomy=categorias-mg&title_li=' . __('') . ''); ?>
        </ul>
    </div>

    <div class="box-cat">
        <div><h3>Vagas Recentes</h3></div>
        
        <ul>
        <?php
            $newsArgs = array( 'post_type' => 'minas-gerais', 'posts_per_page' => 10);
            $newsLoop = new WP_Query($newsArgs);  

            while($newsLoop->have_posts()) : $newsLoop->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>

    <div id="face">
        <div class="fb-like-box" data-href="https://www.facebook.com/empregopraontem.mg" data-width="266" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
    </div>