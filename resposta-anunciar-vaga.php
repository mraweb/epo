<?php
/* Template Name: Resposta Anunciar Vaga */
require_once('phpmailer/class.phpmailer.php');
  $phpmail = new PHPMailer();
  $phpmail->IsSMTP(); // envia por SMTP
  $phpmail->Host = "localhost"; // SMTP servers
  $phpmail->SMTPAuth = false; // Caso o servidor SMTP precise de autenticação
  $phpmail->Username = "empregop"; // SMTP username
  $phpmail->Password = "C5PgbSA7xRl3"; // SMTP password
  $phpmail->Port = 587;

  $phpmail->IsHTML(true);
  $phpmail->From = "envia@empregopraontem.com.br";
  $phpmail->FromName = $_POST["nome"];

  //$phpmail->AddAddress('marcelo@mraweb.com.br', 'MRAWEB Teste EPO');
  $phpmail->AddAddress('contato@empregopraontem.com.br', 'Emprego pra Ontem');
  $phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);

  $phpmail->Subject = "Contato da Página Anúnciar Vaga - ".$_POST["nome"]."";

  $phpmail->Body .= "<strong>IP:</strong> ". $_SERVER["REMOTE_ADDR"]."<br /><br />";

  $phpmail->Body .= "<strong>Dados do Anunciante</strong> <br />";
  $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
  $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["mail"]."<br />";
  $phpmail->Body .= "<strong>Telefone:</strong> ". $_POST["tel"]."<br /><br />";


  $phpmail->Body .= "<strong>Informações da Vaga</strong> <br />";
  $phpmail->Body .= "<strong>Título da Vaga:</strong> ". $_POST["vaga"]."<br />";
  $phpmail->Body .= "<strong>Empresa:</strong> ". $_POST["empresa"]."<br />";
  $phpmail->Body .= "<strong>Estado:</strong> ". $_POST["estado"]."<br />";
  $phpmail->Body .= "<strong>Local de Trabalho:</strong> ". $_POST["local"]."<br />";
  $phpmail->Body .= "<strong>Número de Vagas:</strong> ". $_POST["numero"]."<br />";
  $phpmail->Body .= "<strong>Pré-requisitos:</strong> ". $_POST["requisitos"]."<br />";
  $phpmail->Body .= "<strong>Descrição da Vaga:</strong> ". $_POST["descricao"]."<br />";
  $phpmail->Body .= "<strong>Como se Candidatar:</strong> ". $_POST["candidatar"]."<br />";

  if($_POST["valida"] == ""){
    if(!strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['vaga']) && $_POST['vaga'] != ''){
    $send = $phpmail->Send();
  }
}

get_header(); ?>

				<div class='box' id='cont-left'>
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile;
					?>

					<p><strong>Sua mensagem foi enviada com Sucesso!</strong></p>
				</div>

				<div class='box' id='cont-right'>
					<p class="titulo-aside">Vagas <span>de Emprego</span></p>

					<?php include 'sidebar-empresa.php'; ?>
				</div>

<?php
get_footer();