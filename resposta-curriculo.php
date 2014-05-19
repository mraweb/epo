<?php
				
	include_once('dompdf/dompdf_config.inc.php');

	// DADOS PESSOAIS
	$nome     = $_POST["nome"];
	$endereco = $_POST["end"];
	$telefone = $_POST["tel"];					
	$email    = $_POST["mail"];

	//CARGO
	$cargo = $_POST["cargo"];

	//FORMAÇÃO ACADÊMICA
	$instituicao = $_POST["inst"];
	$graduacao   = $_POST["graduacao"];
	$conclusao   = $_POST["conclusao"];

	// IDIOMAS
	$idioma1   = $_POST["idioma1"];					
	$idioma2   = $_POST["idioma2"];
	$idioma3   = $_POST["idioma3"];
	$idioma4   = $_POST["idioma4"];					

	// CURSOS EXTRACURRICULARES
	$curso1   = $_POST["curso1"];
	$instit01 = $_POST["instit01"];
	$concl1   = $_POST["concl1"];

	$curso2   = $_POST["curso2"];
	$instit02 = $_POST["instit02"];
	$concl2   = $_POST["concl2"];

	$curso3   = $_POST["curso3"];
	$instit03 = $_POST["instit03"];
	$concl3   = $_POST["concl3"];

	$curso4   = $_POST["curso4"];
	$instit04 = $_POST["instit04"];
	$concl4   = $_POST["concl4"];

	// HISTÓRICO PROFISSIONAL
	$empresa1   = $_POST["empresa1"];
	$cargoprof1 = $_POST["cargoprof1"];
	$peri1      = $_POST["peri1"];
	$descr1     = $_POST["descr1"];					

	$empresa2   = $_POST["empresa2"];
	$cargoprof2 = $_POST["cargoprof2"];
	$peri2      = $_POST["peri2"];
	$descr2     = $_POST["descr2"];

	$empresa3   = $_POST["empresa3"];
	$cargoprof3 = $_POST["cargoprof3"];
	$peri3      = $_POST["peri3"];
	$descr3     = $_POST["descr3"];

	// OBJETIVOS
	$objetivo = $_POST["objetivo"];

	// REDES SOCIAIS
	$linkedin = $_POST["linkedin"];
	$facebook = $_POST["facebook"];
	$twitter  = $_POST["twitter"];					

	// ARQUIVO PDF	
	$html = '
			<center><h1 style="font-size: 20pt">'.$nome.'</h1></center><hr /><br />
			<h2 style="font-size: 12pt">Dados Pessoais</h2><hr />
			<p style="font-size: 9pt">'.$endereco.'<br />'.$telefone.'<br />'.$email.'</p>
			<p style="font-size: 9pt">Objetivo: '.$cargo.'</p><br />
			<h2 style="font-size: 12pt">Formação Acadêmica</h2><hr />
			<p style="font-size: 9pt">'.$instituicao.'</p>
			<p style="font-size: 9pt">'.$graduacao.'<br />Conclusão: '.$conclusao.'</p>						
			';

			if( $idioma1 <> "" ) { 
						
				$html .= '
						<br /><h2 style="font-size: 12pt">Idiomas</h2><hr />
						<ul style="font-size: 9pt"><li>'.$idioma1.'</li>
						';
						
				if( $idioma2 <> "" ) 

					$html .= '
							<li>'.$idioma2.'</li>
							';

				if( $idioma3 <> "" )
					
					$html .= '
							<li>'.$idioma3.'</li>
							';							

				if( $idioma4 <> "" )
					
					$html .= '
							<li>'.$idioma4.'</li>
							';

				$html.= '</ul>';
						
			} 

			if( $curso1 <> "" ) { 
						
				$html .= '
						<br /><h2 style="font-size: 12pt">Cursos Extracurriculares</h2><hr />
						<ul style="font-size: 9pt"><li>'.$curso1.'<br />'.$instit01.'<br />Conclusão: '.$concl1.'</li>
						';						
						
				if( $curso2 <> "" ) 

					$html .= '
							<li>'.$curso2.'<br />'.$instit02.'<br />Conclusão: '.$concl2.'</li>
							';				
							
				if( $curso3 <> "" ) 

					$html .= '
							<li>'.$curso3.'<br />'.$instit03.'<br />Conclusão: '.$concl3.'</li>
							';				
							
				if( $curso4 <> "" ) 

					$html .= '
							<li>'.$curso4.'<br />'.$instit04.'<br />Conclusão: '.$concl4.'</li>
							';				

				$html .= '</ul>';
				
			}	
						
			if( $empresa1 <> "" ) { 

				$html .= '
						<br /><h2 style="font-size: 12pt">Histórico Profissional</h2><hr />
						<ul style="font-size: 9pt"><li>'.$empresa1.'<br />'.$cargoprof1.'<br />Período: '.$peri1.'<br />Atividade(s) desempenhada(s):<br />'.$descr1.'</li>
						';

				if( $empresa2 <> "" ) 

					$html .= '
							<li>'.$empresa2.'<br />'.$cargoprof2.'<br />Período: '.$peri2.'<br />Atividade(s) desempenhada(s):<br />'.$descr2.'</li>
							';
						
				if( $empresa3 <> "" ) 

					$html .= '
							<li>'.$empresa3.'<br />'.$cargoprof3.'<br />Período: '.$peri3.'<br />Atividade(s) desempenhada(s):<br />'.$descr3.'</li>
							';
							
				$html .= '</ul>';				
						
			}
							
			if( $objetivo <> "" )
				
				$html.= '
						<br /><h2 style="font-size: 12pt">Objetivos</h2><hr />
						<p style="font-size: 9pt">'.$objetivo.'</p>
						';

			if( $linkedin <> "" || $facebook <> "" || $twitter <> "" ) { 

				$html.= '			
						<br /><h2 style="font-size: 12pt">Redes Sociais</h2><hr />
						<ul style="font-size: 9pt">
						';							
							
				if( $linkedin <> "" )

					$html.= '
							<li>Linkedin: <a href="'.$linkedin.'">'.$linkedin.'</a></li>
							';
							
				if( $facebook <> "" )

					$html.= '
							<li>Facebook: <a href="'.$facebook.'">'.$facebook.'</a></li>
							';							

				if( $twitter <> "" )

					$html.= '
							<li>Twitter: <a href="'.$twitter.'">'.$twitter.'</a></li>
							';

				$html.= '</ul>';							
							
			}

			$dompdf = new DOMPDF();
			$dompdf -> load_html($html);
			$dompdf -> render();
			$dompdf -> stream($nome.'.pdf');	
	
?>