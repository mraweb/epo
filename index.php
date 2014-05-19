<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

				<div class='box' id='box-video'>
                    <div class='box' id='texto-video'>
                        <p class="texto-video">Veja como funciona<br />
                        o Emprego pra Ontem,<br />
                        <span>entenda todas as mudanças.</span></p>

                        <p class="texto-estado">Selecione o estado<br />
                        onde deseja sua<br />
                        vaga de emprego</p>
                    </div>

                    <div class='box' id='video'>
                        <div class="video-container">
                            <iframe width="320" height="250" src="//www.youtube.com/embed/9A63HK_l-9E?rel=0"></iframe>
                        </div>
                    </div>
                </div>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-amazonas" title="Vagas de Emprego no Amazonas" class="am"><span>Vagas de Emprego no Amazonas</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-bahia" title="Vagas de Emprego na Bahia" class="ba"><span>Vagas de Emprego na Bahia</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-ceara" title="Vagas de Emprego no Ceará" class="ce"><span>Vagas de Emprego no Ceará</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-distrito-federal" title="Vagas de Emprego no Distrito Federal" class="df"><span>Vagas de Emprego no Distrito Federal</span></a></h2>
                </section>

                <div class='box' id='adsense'>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- EPO-NOVO-HOME -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:970px;height:90px"
                         data-ad-client="ca-pub-7058926907016391"
                         data-ad-slot="2490729421">
                    </ins>
                    
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-espirito-santo" title="Vagas de Emprego no Espírito Santo" class="es"><span>Vagas de Emprego no Espírito Santo</span></a></h2>
                </section>
                
                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-maranhao" title="Vagas de Emprego no Maranhão" class="ma"><span>Vagas de Emprego no Maranhão</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-minas-gerais" title="Vagas de Emprego em Minas Gerais" class="mg"><span>Vagas de Emprego em Minas Gerais</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-pernambuco" title="Vagas de Emprego em Pernambuco" class="pe"><span>Vagas de Emprego em Pernambuco</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-rio-de-janeiro" title="Vagas de Emprego no Rio de Janeiro" class="rj"><span>Vagas de Emprego no Rio de Janeiro</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-sao-paulo" title="Vagas de Emprego em São Paulo" class="sp"><span>Vagas de Emprego em São Paulo</span></a></h2>
                </section>

                <section class='box estados'>
                    <h2><a href="<?php bloginfo('url'); ?>/vagas-rondonia" title="Vagas de Emprego em Rondônia" class="ro"><span>Vagas de Emprego em Rondônia</span></a></h2>
                </section>

<?php
get_footer();
