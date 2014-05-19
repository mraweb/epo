<?php
/* Template Name: Contato */

get_header(); ?>

				<div class='box' id='cont-left'>
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile;
					?>

					<form action="resposta-contato" method="post" id="formID">
              <input type="hidden" name="valida" id="valida" />
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

                 <li>
                      <label for="estado">Estado:</label>
                      <select name="estado" id="estado">
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
                     <label for="assunto">Assunto:</label>
                     <input type="text" name="assunto" id="assunto" />
                 </li>

                 <li>
                     <label for="msg">Mensagem:</label>
                     <textarea name="msg" id="msg" rows="5" cols="50"></textarea>
                 </li> 

                 <li><input type="image" src="<?php bloginfo("template_directory"); ?>/img/btenviar.jpg" name="Cadastrar" id="Cadastrar" class="bt-cadastrar" /></li> 
              </ul>
          </form>
				</div>

				<div class='box' id='cont-right'>
					<p class="titulo-aside">Vagas <span>de Emprego</span></p>
					
					<?php include 'sidebar-empresa.php'; ?>
				</div>

<?php
get_footer();
