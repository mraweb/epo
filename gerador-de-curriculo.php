<?php
/* Template Name: Curriculo */

get_header(); 

?>

				<div class='box' id='cont-left'>
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile;
					?>

					<form action="http://www.mraweb.com.br/epo/resposta-curriculo/" method="post" id="formCurriculo">
                        <h2>1 - Dados Pessoais</h2>

                        <ul>
                           <li>
                               <label for="nome">Nome*:</label>
                               <input type="text" name="nome" id="nome" class="validate[required]" />
                           </li>

                           <li>
                               <label for="end">Endereço*:</label>
                               <input type="text" name="end" id="end" class="validate[required]" />
                           </li>

                           <li>
                               <label for="tel">Telefone*:</label>
                               <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                           </li>

                           <li>
                               <label for="mail">E-mail*:</label>
                               <input type="text" name="mail" id="mail" class="validate[required,custom[email]]" />
                           </li>

                           <li class="cem">
                               <label for="cargo">Cargo ou área que pretende atuar*:</label>
                               <input type="text" name="cargo" id="cargo" class="validate[required]" />
                           </li>
                        </ul>

                        <h2>2 - Formação Acadêmica</h2>

                        <ul>
                           <li class="cem">
                               <label for="inst">Nome da Instituição*:</label>
                               <input type="text" name="inst" id="inst" class="validate[required]" />
                           </li>

                           <li>
                               <label for="graduacao">Graduação*:</label>
                               <select name="graduacao" id="graduacao" class="validate[required]">
                                    <option value="">Selecione</option>
                                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                                    <option value="Ensino Médio">Ensino Médio</option>
                                    <option value="Superior Incompleto">Superior Incompleto</option>
                                    <option value="Superior Completo">Superior Completo</option>
                                    <option value="Pós Graduação">Pós Graduação</option>
                                    <option value="Mestrado">Mestrado</option>
                                    <option value="MBA">MBA</option>
                               </select>
                           </li>

                           <li>
                               <label for="conclusao" class="lb-menor">Data Conclusão*:</label>
                               <input type="text" name="conclusao" id="conclusao" class="validate[required]" />
                           </li>
                        </ul>

                        <h2>3 - Idiomas</h2>
                        <p class="txt-h2">Mencionar apenas se for fluente</p>

                        <ul>
                           <li>
                               <label for="idioma1">Idioma 1:</label>
                               <input type="text" name="idioma1" id="idioma1" />
                           </li>

                           <li>
                               <label for="idioma2">Idioma 2:</label>
                               <input type="text" name="idioma2" id="idioma2" />
                           </li>

                           <li>
                               <label for="idioma3">Idioma 3:</label>
                               <input type="text" name="idioma3" id="idioma3" />
                           </li>

                           <li>
                               <label for="idioma4">Idioma 4:</label>
                               <input type="text" name="idioma4" id="idioma4" />
                           </li>
                        </ul>

                        <h2>4 - Cursos Extracurriculares</h2>
                        <p class="txt-h2">Cursos recentes, relacionados ao objetivo atual</p>

                        <ul>
                            <li class="cem">
                               <label for="curso1" class="lb-menor1">Curso:</label>
                               <input type="text" name="curso1" id="curso1" />
                           </li>

                           <li>
                               <label for="instit01">Instituição:</label>
                               <input type="text" name="instit01" id="instit01" />
                           </li>

                           <li>
                               <label for="concl1">Conclusão:</label>
                               <input type="text" name="concl1" id="concl1" />
                           </li>
                        </ul>

                        <ul>
                            <li class="cem">
                               <label for="curso2" class="lb-menor1">Curso:</label>
                               <input type="text" name="curso2" id="curso2" />
                           </li>

                           <li>
                               <label for="instit02">Instituição:</label>
                               <input type="text" name="instit02" id="instit02" />
                           </li>

                           <li>
                               <label for="concl2">Conclusão:</label>
                               <input type="text" name="concl2" id="concl2" />
                           </li>
                        </ul>

                        <ul>
                            <li class="cem">
                               <label for="curso3" class="lb-menor1">Curso:</label>
                               <input type="text" name="curso3" id="curso3" />
                           </li>

                           <li>
                               <label for="instit03">Instituição:</label>
                               <input type="text" name="instit03" id="instit03" />
                           </li>

                           <li>
                               <label for="concl3">Conclusão:</label>
                               <input type="text" name="concl3" id="concl3" />
                           </li>
                        </ul>

                        <h2>5 - Histórico Profissional</h2>
                        
                        <h3>Última empresa em que trabalhou:</h3>
                        <ul>
                            <li class="cem">
                               <label for="empresa1" class="lb-menor1">Empresa:</label>
                               <input type="text" name="empresa1" id="empresa1" />
                           </li>

                           <li>
                               <label for="cargoprof1">Cargo:</label>
                               <input type="text" name="cargoprof1" id="cargoprof1" />
                           </li>

                           <li>
                               <label for="peri1">Período:</label>
                               <input type="text" name="peri1" id="peri1" />
                           </li>

                           <li class="cem">
                               <label for="descr1" class="lb-cem">Descrição das atividades desempenhadas:</label>
                               <textarea name="descr1" id="descr1" rows="5" cols="50"></textarea>
                           </li>
                        </ul>

                        <h3>Penúltima empresa em que trabalhou:</h3>
                        <ul>
                            <li class="cem">
                               <label for="empresa2" class="lb-menor1">Empresa:</label>
                               <input type="text" name="empresa2" id="empresa2" />
                           </li>

                           <li>
                               <label for="cargoprof2">Cargo:</label>
                               <input type="text" name="cargoprof2" id="cargoprof2" />
                           </li>

                           <li>
                               <label for="peri2">Período:</label>
                               <input type="text" name="peri2" id="peri2" />
                           </li>

                           <li class="cem">
                               <label for="descr2" class="lb-cem">Descrição das atividades desempenhadas:</label>
                               <textarea name="descr2" id="descr2" rows="5" cols="50"></textarea>
                           </li>
                        </ul>

                        <h3>Antepenúltima empresa em que trabalhou:</h3>
                        <ul>
                            <li class="cem">
                               <label for="empresa3" class="lb-menor1">Empresa:</label>
                               <input type="text" name="empresa3" id="empresa3" />
                           </li>

                           <li>
                               <label for="cargoprof3">Cargo:</label>
                               <input type="text" name="cargoprof3" id="cargoprof3" />
                           </li>

                           <li>
                               <label for="peri3">Período:</label>
                               <input type="text" name="peri3" id="peri3" />
                           </li>

                           <li class="cem">
                               <label for="descr3" class="lb-cem">Descrição das atividades desempenhadas:</label>
                               <textarea name="descr3" id="descr3" rows="5" cols="50"></textarea>
                           </li>
                        </ul>

                        <h2>6 - Objetivos</h2>
                        <p class="txt-h2">Área opcional para descrever um pouco de seus sonhos acadêmicos e profissionais, (recomendado a pessoas que procuram o primeiro emprego e não possuem experiência profissional)</p>

                        <ul>
                            <li class="cem">
                               <label for="objetivo" class="acessibilidade">Descreva seu objetivo:</label>
                               <textarea name="objetivo" id="objetivo" rows="5" cols="50"></textarea>
                           </li>
                        </ul>

                        <h2>7 - Redes Sociais</h2>
                        <p class="txt-h2">Se você deseja um currículo atualizado e cheio de informações, uma das dicas mais valiosas é acrescentar seus perfis sociais ao CV. LinkedIn, Twitter e Facebook são as principais plataformas</p>

                        <ul>
                            <li class="cem">
                               <label for="linkedin" class="lb-menor1">Linkedin:</label>
                               <input type="text" name="linkedin" id="linkedin" />
                           </li>

                           <li class="cem">
                               <label for="facebook" class="lb-menor1">Facebook:</label>
                               <input type="text" name="facebook" id="facebook" />
                           </li>

                           <li class="cem">
                               <label for="twitter" class="lb-menor1">Twitter:</label>
                               <input type="text" name="twitter" id="twitter" />
                           </li>
                        </ul>

                        <input type="image" src="<?php bloginfo("template_directory"); ?>/img/btpdf.jpg" name="Cadastrar" id="Cadastrar" class="bt-pdf" />
                    </form>
				</div>

				<div class='box' id='cont-right'>
					<p class="titulo-aside">Vagas <span>de Emprego</span></p>
					
					<?php include 'sidebar-empresa.php'; ?>
				</div>
				
<?php

get_footer();