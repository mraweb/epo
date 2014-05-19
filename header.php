<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="http://empregopraontem.com.br/wp-content/themes/atual/img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php if(is_home()){ ?>
    <title><?php wp_title( '', true, 'right' ); ?></title>
    <?php }else{ ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if(is_page("anunciar-vaga") || is_page("contato") || is_page("gerador-de-curriculo")){ ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/validationEngine.jquery.css">
    <?php } ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-50066628-1', 'empregopraontem.com.br');
      ga('send', 'pageview');
    </script>
</head>

<body class="bg-home">
	<div class='root'>
            <header class='box' id='Header' role='banner'>
                <div class='box' id='Logo'>
                    <?php if(is_home()){ ?>
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Emprego Pra Ontem" class="hidetxt">Emprego Pra Ontem</a></h1>
                    <?php }else{ ?>
					<p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Emprego Pra Ontem"><img src="<?php bloginfo('template_directory'); ?>/img/emprego-pra-ontem.gif" alt="Emprego Pra Ontem" height="126" width="302" /></a></p>
                    <?php } ?>
                </div>

                <div class='box' id='midias-top'>
                    <div class='box' id='redes-sociais-top'>
                        <ul class="midias">
                            <li><a href="http://www.facebook.com/EMPREGOPRAONTEM" title="Facebook" class="hidetxt" rel="external">Facebook</a></li>

                            <li><a href="http://twitter.com/empregopraontem" title="Twitter" class="hidetxt" rel="external">Twitter</a></li>

                            <li><a href="http://plus.google.com/u/0/b/103992249736215955191/103992249736215955191/posts" title="Google +" class="hidetxt" rel="external">Google +</a></li>

                            <li><a href="http://www.linkedin.com/groups/Emprego-pra-Ontem-7496773" title="Linkedin" class="hidetxt" rel="external">Linkedin</a></li>
                        </ul>
                    </div>

                    <nav class='box nav-collapse' id='menu' role='navigation'>
                        <ul id="navMenu">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" <?php if(is_home()){ echo 'class="ativo"'; } ?>>Home</a></li>

                            <li><a href="<?php bloginfo('url'); ?>/quem-somos" title="Quem Somos" <?php if(is_page('quem-somos')){ echo 'class="ativo"'; } ?>>Quem Somos</a></li>

                            <li>
                                <a href="javascript:void(0);" title="Vagas" <?php if(is_page('rio-de-janeiro') || is_page('sao-paulo')){ echo 'class="ativo"'; } ?>>Vagas</a>
                                <?php wp_nav_menu( array('menu' => 'Empresa' )); ?>
                            </li>

                            <li><a href="<?php bloginfo('url'); ?>/anunciar-vaga" title="Anunciar Vaga"<?php if(is_page('anunciar-vaga')){ echo 'class="ativo"'; } ?>>Anunciar Vaga</a></li>

                            <li><a href="<?php bloginfo('url'); ?>/contato" title="Contato"<?php if(is_page('contato')){ echo 'class="ativo"'; } ?>>Contato</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="ads-top">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- EPO-NOVO-HOME-RESPONSIVO -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7058926907016391"
                         data-ad-slot="4707335825"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="ads-top1">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:728px;height:15px"
                         data-ad-client="ca-pub-7058926907016391"
                         data-ad-slot="2667892624"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </header><!-- #masthead -->

			<section class='box' id='content' role='main'>