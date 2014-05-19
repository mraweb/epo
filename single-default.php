<?php
/**
 * The Template for displaying all single posts
 * Template Name: Post Personalizado
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section class='box' id='content' role='main'>
        <div class='box' id='cont-left'>
            <h1 class="size">Atendente de Fast Food</h1>

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
            
            <!-- <div class="adsense-post">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

                <ins class="adsbygoogle"
                     style="display:table; width:250px; height:250px; margin: 0 auto;"
                     data-ad-client="ca-pub-4919709709866768"
                     data-ad-slot="4082337333"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div> -->

            <div class="cont-post">

                <p>Cargo: <?php echo $cargo; ?></br />
                Estado/Cidade: <?php echo $estado; ?></br />
                Local de trabalho/bairro: <?php echo $bairro; ?></p>

                <p>Pré requisitos:</p>

                <ul>
                    <li>Experiência na função</li>
                    <li>Sexo masculino</li>
                    <li>Fácil acesso à Barra da Tijuca</li>
                </ul>

                <p>Descrição da vaga:</p>

                <ul>
                    <li>Pessoa determinada e ágil</li>
                    <li>irá realizar atividade de bar, tais como:<br />
                    Preparação de drinks e sobremesas, atender o
                    pedido dos garçons e organização do ambiente 
                    de trabalho.</li>
                </ul>

                <p>Como se candidatar:</p>

                <p>Favor enviar currículo no corpo do e-mail para:
                <a href="mailto:claudiaksrh@yahoo.com">claudiaksrh@yahoo.com</a>, com assunto Auxiliar
                de bar.</p>
            </div><!-- FINAL CONT-POST -->

<?php
get_sidebar();
get_footer();
?>
