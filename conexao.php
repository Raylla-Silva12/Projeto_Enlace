<?php

			// _-_ CONEXÃO COM O BANCO DE DADOS _-_ \\
 	$conexao = new mysqli("localhost","root","usbw","TURISMO");
	if(!$resultado){
		echo "Conexão não realizada. Erro ".$conexao->error;
	}
					// _-_ CAMPO DOS CPF's_-_ \\

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

					
 					// _-_ CAMPO DAS ATIVIDADES _-_ \\

			// _-_ INSERINDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function cadAtiv($NmAtv, $DtAtv, $DescricaoAtv, $BairroAtv, $EnderecoAtv, $NumeroAtv, $ComplementoAtv, $ReferenciaAtv, $TelAtv, $Tel2Atv, $EmailAtv){
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

?>