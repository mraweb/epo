<?php
/* Template Name: Resposta Anunciar Vaga */
require_once('phpmailer/class.phpmailer.php');
  $phpmail = new PHPMailer();
  $phpmail->IsSMTP(); // envia por SMTP
  $phpmail->Host = "localhost"; // SMTP servers
  $phpmail->SMTPAuth = false; // Caso o servidor SMTP precise de autenticação
  $phpmail->Username = "empregop"; // SMTP username
  $phpmail->Password = "#riodejaneiro#"; // SMTP password
  $phpmail->Port = 587;

  $phpmail->IsHTML(true);
  $phpmail->From = "envia@empregopraontem.com.br";
  $phpmail->FromName = $_POST["nome"];

  //$phpmail->AddAddress('marcelo@mraweb.com.br', 'MRAWEB Teste EPO');
  $phpmail->AddAddress('contato@empregopraontem.com.br', 'Emprego pra Ontem');
  $phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);

  $phpmail->Subject = "Contato do site Emprego pra Ontem - ".$_POST["nome"]."";

  $phpmail->Body .= "<strong>IP:</strong> ". $_SERVER["REMOTE_ADDR"]."<br /><br />";

  $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
  $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["mail"]."<br />";
  $phpmail->Body .= "<strong>Telefone:</strong> ". $_POST["tel"]."<br />";
  $phpmail->Body .= "<strong>Estado:</strong> ". $_POST["estado"]."<br />";
  $phpmail->Body .= "<strong>Assunto:</strong> ". $_POST["assunto"]."<br />";
  $phpmail->Body .= "<strong>Mensagem:</strong> ".nl2br($_POST["msg"])."<br />";

  if($_POST["valida"] == ""){
    if(!strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] != ''){
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
