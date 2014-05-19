<?php
/* Template Name: Anunciar Vaga */

get_header(); ?>

				<div class='box' id='cont-left'>
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile;
					?>

					<form action="resposta-anunciar-vaga" method="post" id="formID">
              <input type="hidden" name="valida" id="valida" />

              <h2>Dados do Anunciante</h2>

              <ul>
                <li>
                     <label for="nome">Nome*:</label>
                     <input type="text" name="nome" id="nome" class="validate[required]" />
                 </li>

                 <li>
                     <label for="mail">E-mail*:</label>
                     <input type="text" name="mail" id="mail" class="validate[required,custom[email]]" />
                 </li>

                 <li>
                     <label for="tel">Telefone*:</label>
                     <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                 </li>
              </ul>
              
              <h2>Informações da Vaga</h2>

              <ul>
                 <li>
                     <label for="vaga">Título da Vaga*:</label>
                     <input type="text" name="vaga" id="vaga" class="validate[required]" />
                 </li>

                 <li>
                     <label for="empresa">Empresa*:</label>
                     <input type="text" name="empresa" id="empresa" class="validate[required]" />
                 </li>

                 <li>
                      <label for="estado">Estado*:</label>
                      <select name="estado" id="estado" class="validate[required]">
                          <option value="">Selecione um Estado</option>
                          <option value="AC">Acre</option>
                          <option value="AL">Alagoas</option>
                          <option value="AM">Amazonas</option>
                          <option value="AP">Amapá</option>
                          <option value="BA">Bahia</option>
                          <option value="CE">Ceará</option>
                          <option value="DF">Distrito Federal</option>
                          <option value="ES">Espirito Santo</option>
                          <option value="GO">Goiás</option>
                          <option value="MA">Maranhão</option>
                          <option value="MG">Minas Gerais</option>
                          <option value="MS">Mato Grosso do Sul</option>
                          <option value="MT">Mato Grosso</option>
                          <option value="PA">Pará</option>
                          <option value="PB">Paraíba</option>
                          <option value="PE">Pernambuco</option>
                          <option value="PI">Piauí</option>
                          <option value="PR">Paraná</option>
                          <option value="RJ">Rio de Janeiro</option>
                          <option value="RN">Rio Grande do Norte</option>
                          <option value="RO">Rondônia</option>
                          <option value="RR">Roraima</option>
                          <option value="RS">Rio Grande do Sul</option>
                          <option value="SC">Santa Catarina</option>
                          <option value="SE">Sergipe</option>
                          <option value="SP">São Paulo</option>
                          <option value="TO">Tocantins</option>
                     </select>
                 </li> 

                 <li>
                     <label for="local">Local de Trabalho*:</label>
                     <input type="text" name="local" id="local" class="validate[required]" />
                 </li>

                 <li>
                     <label for="numero">Número de Vagas*:</label>
                     <input type="text" name="numero" id="numero" />
                 </li> 

                 <li>
                     <label for="requisitos">Pré Requisitos*:</label>
                     <textarea name="requisitos" id="requisitos" rows="5" cols="50" class="validate[required]"></textarea>
                 </li> 

                 <li>
                     <label for="descricao">Descrição da Vaga*:</label>
                     <textarea name="descricao" id="descricao" rows="5" cols="50" class="validate[required]"></textarea>
                 </li> 

                 <li>
                     <label for="candidatar">Como se Candidatar*:</label>
                     <textarea name="candidatar" id="candidatar" rows="5" cols="50" class="validate[required]"></textarea>
                 </li> 

                 <li><input type="image" src="<?php bloginfo("template_directory"); ?>/img/btcadastrar.jpg" name="Cadastrar" id="Cadastrar" class="bt-cadastrar" /></li> 
              </ul>
          </form>
				</div>

				<div class='box' id='cont-right'>
					<p class="titulo-aside">Vagas <span>de Emprego</span></p>
					
					<?php include 'sidebar-empresa.php'; ?>
				</div>

<?php
get_footer();