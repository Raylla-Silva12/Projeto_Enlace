<meta charset="utf-8">

<?php

			// _-_ CONEXÃO COM O BANCO DE DADOS _-_ \\
 	$conexao = new mysqli("localhost","root","usbw","TURISMO");
	if(!$resultado){
		echo "Conexão não realizada. Erro ".$conexao->error;
	}


					// *_-_* CAMPO DOS CPF's*_-_* \\

			// _-_ INSERINDO CPF NO BANCO DE DADOS _-_ \\
 	function cadPessoa($Nome, $CPF, $DtNasc, $BairroCPF, $EnderecoCPF, $NumeroCPF, $ComplementoCPF, $ReferenciaCPF, $TelCPF, $Tel2CPF, $EmailCPF){
 		$envio = 'INSERT INTO TB_PESSOA VALUES (NULL, "'.$Nome.'", "'.$CPF.'", "'.$DtNasc.'", "'.$BairroCPF.'", "'.$EnderecoCPF.'", "'.$NumeroCPF.'", "'.$ComplementoCPF.'", "'.$ReferenciaCPF.'", "'.$TelCPF.'", "'.$Tel2CPF.'", "'.$EmailCPF.'")';
 		$resultado = $conexao->query($envio);
 		$cdCPF = $resultado->insert_id;

		if($resultado){
			echo "Civil $Nome, cadastrado com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar usuário: ".$conexao->error;
		}
 	}

					
 					// *_-_* CAMPO DAS ATIVIDADES *_-_* \\

			// _-_ INSERINDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function cadAtv($NmAtv, $DtAtv, $DescricaoAtv, $BairroAtv, $EnderecoAtv, $NumeroAtv, $ComplementoAtv, $ReferenciaAtv, $TelAtv, $Tel2Atv, $EmailAtv){
 		$envio = 'INSERT INTO TB_ATIVIDADE VALUES ("'.$NmAtv.'","'.$DtAtv.'", "'.$DescricaoAtv.'", "'.$BairroAtv.'", "'.$EnderecoAtv.'", "'.$NumeroAtv.'", "'.$ComplementoAtv.'", "'.$ReferenciaAtv.'", "'.$TelAtv.'", "'.$Tel2Atv.'", "'.$EmailAtv.'","'.$cdCPF.'")';
 		$resultado = $conexao->query($envio);

		if($resultado){
			echo "Atividade $NmAtiv cadastrada com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar atividade: ".$conexao->error;
		}
		$cdAtv = $resultado->insert_id;
 	}

			// _-_ DELETANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function DelAtv($cdAtv){
 		$envio = "DELETE FROM TB_ATIVIDADE WHERE CDATIVIDADE = $cdAtv";
 		$resultado = $conexao->query($envio);

		if($resultado){
			echo "Atividade excluída com sucesso! ";
		}
		else{
			echo "Ação não realizada: ".$conexao->error;
		}
 	}

			// _-_ LISTANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function ListAtv(){
 		$envio = "SELECT * FROM TB_ATIVIDADE";
 		$resultado = $conexao->query($envio);

		return $resultado;
 	}


				 	// *_-_* CAMPO DOS CNPJ's*_-_* \\

			// _-_ INSERINDO CNPJ NO BANCO DE DADOS _-_ \\
 	function cadEmpresa($NmFant, $CNPJ, $BairroCNPJ, $EnderecoCNPJ, $NumeroCNPJ, $ComplementoCNPJ, $ReferenciaCNPJ, $TelCNPJ, $Tel2CNPJ, $EmailCNPJ){
 		$envio = 'INSERT INTO TB_PESSOA VALUES (NULL, "'.$NmFant.'", "'.$CNPJ.'", "'.$BairroCNPJ.'", "'.$EnderecoCNPJ.'", "'.$NumeroCNPJ.'", "'.$ComplementoCNPJ.'", "'.$ReferenciaCNPJ.'", "'.$TelCNPJ.'", "'.$Tel2CNPJ.'", "'.$EmailCNPJ.'")';
 		$resultado = $conexao->query($envio);
 		$cdCNPJ = $resultado->insert_id;

		if($resultado){
			echo "Empresa $NmFant, cadastrada com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar estabelecimento: ".$conexao->error;
		}
 	}

 					// *_-_* CAMPO DOS EVENTOS *_-_* \\

			// _-_ INSERINDO EVENTOS NO BANCO DE DADOS _-_ \\
 	function cadEvt($NmEvt, $DtEvt, $DescricaoEvt, $BairroEvt, $EnderecoEvt, $NumeroEvt, $ComplementoEvt, $ReferenciaEvt, $TelEvt, $Tel2Evt, $EmailEvt){
 		$envio = 'INSERT INTO TB_EVENTO VALUES ("'.$NmEvt.'","'.$DtEvt.'", "'.$DescricaoEvt.'", "'.$BairroEvt.'", "'.$EnderecoEvt.'", "'.$NumeroEvt.'", "'.$ComplementoEvt.'", "'.$ReferenciaEvt.'", "'.$TelEvt.'", "'.$Tel2Evt.'", "'.$EmailEvt.'","'.$cdCNPJ.'")';
 		$resultado = $conexao->query($envio);

		if($resultado){
			echo "Atividade $NmAtiv cadastrada com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar atividade: ".$conexao->error;
		}
		$cdEvt = $resultado->insert_id;
 	}

 				// _-_ DELETANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function DelEvt($cdEvt){
 		$envio = "DELETE FROM TB_EVENTO WHERE CDEVENTO = $cdEvt";
 		$resultado = $conexao->query($envio);

		if($resultado){
			echo "Atividade excluída com sucesso! ";
		}
		else{
			echo "Ação não realizada: ".$conexao->error;
		}
 	}

			// _-_ LISTANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function ListEvt(){
 		$envio = "SELECT * FROM TB_EVENTO";
 		$resultado = $conexao->query($envio);

		return $resultado;
 	}
?>