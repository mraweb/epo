<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
            </section>
		</div>

		<div class="wrapper">
            <div class="root">
                <footer class='box' id='footer' role='contentinfo'>
                    <div class='box' id='footer-left'>
                        <div class='box' id='twitter'>
                            <a class="twitter-timeline" href="https://twitter.com/empregopraontem" data-widget-id="454734231705354241">Tweets de @empregopraontem</a>
                            
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>

                        <div class="pdg-top">
                            <div class='box' id='logo-footer'><img src="<?php bloginfo('template_directory'); ?>/img/logo-footer.gif" alt="Emprego Pra Ontem" width="127" height="53" /></div>

                            <div class='box' id='area-restrita'>
                                <a href="http://www.empregopraontem.com.br/wp-admin/" title="Área Restrita" class="bt-area hidetxt" rel="external">Área Restrita</a>
                            </div>

                            <div class='box' id='curriculo'>
                                <a href="<?php bloginfo('template_url'); ?>/gerador-de-curriculo" title="Gerador de Currículo" class="bt-curriculo hidetxt">Gerador de Currículo</a>
                            </div>
                        </div>
                    </div>

                    <div class='box' id='footer-right'>
                        <div class='box' id='midias-footer'>
                            <ul class="midias pdg-top">
                                <li><a href="http://www.facebook.com/EMPREGOPRAONTEM" title="Facebook" class="hidetxt" rel="external">Facebook</a></li>

                                <li><a href="https://twitter.com/empregopraontem" title="Twitter" class="hidetxt" rel="external">Twitter</a></li>
                                
                                <li><a href="http://plus.google.com/u/0/b/103992249736215955191/103992249736215955191/posts" title="Google +" class="hidetxt" rel="external">Google +</a></li>
                                
                                <li><a href="http://www.linkedin.com/groups/Emprego-pra-Ontem-7496773" title="Linkedin" class="hidetxt" rel="external">Linkedin</a></li>
                            </ul>
                        </div>

                        <nav class='box' id='nav-footer' role='navigation'>
                            <ul id="menu-footer">
                                <li><a href="/" title="Home">Home</a></li>

                                <li><a href="<?php bloginfo("url"); ?>/quem-somos" title="Quem Somos">Quem Somos</a></li>

                                <li>
                                    <a href="javascript:void(0);" title="Vagas">Vagas</a>
                                    <span></span>
                                    <?php wp_nav_menu( array('menu' => 'Empresa' )); ?>
                                </li>

                                <li><a href="<?php bloginfo("url"); ?>/anunciar-vaga" title="Anunciar Vaga">Anunciar Vaga</a></li>
                                
                                <li><a href="<?php bloginfo("url"); ?>/contato" title="Contato">Contato</a></li>
                            </ul>
                        </nav>

                        <a href="http://www.mraweb.com.br/" title="MRAWEB - Criação de Sites" class="hcc hidetxt" rel="external">MRAWEB - Criação de Sites</a>
                    </div>
                </footer>
            </div>
        </div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
// Ajustar altura - Página Categoria
function setEqualHeight(columns){
  var tallestcolumn = 0;
  columns.each(function(){
    currentHeight = $(this).height();
    if(currentHeight > tallestcolumn){
        tallestcolumn  = currentHeight;
    }
  });
  columns.height(tallestcolumn);
}
setEqualHeight(jQuery("#content > .box-vagas > li"));
</script>
<?php if(is_page("anunciar-vaga") || is_page("contato") || is_page("gerador-de-curriculo")){ ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/validacao.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/responsive-nav.js"></script>
<script type="text/javascript">
  var navigation = responsiveNav(".nav-collapse");
</script>
<script type="text/javascript">
    $('input[title$="Nome"]').attr('placeholder','Nome:');
    $('input[title$="Email"]').attr('placeholder','E-mail:');
    $('.notice-msg').append('<a href="" title="Fechar" class="fechar-box">FECHAR</a>');
    $('.fechar-box').click(function(){
        $('.notice-msg').fadeOut();
    });
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277634635592368";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="dsp-none">
    <div class="dsp-none">
   	<a href="http://www.dihitt.com?ref=438234">diHITT - Notícias</a>
    <a href="http://www.blog8.com.br" title="Blog 8 - Cadastro de Blogs">Blog 8</a>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>