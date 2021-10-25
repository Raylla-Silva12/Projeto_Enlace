<?php
session_start();
			// _-_ CONEXÃO COM O BANCO DE DADOS _-_ \\
 	$conexao = new mysqli("localhost","root","usbw","TURISMO");
	if(!$resultado){
		echo "Conexão não realizada. Erro ".$conexao->error;
	}

	function Login($doc){
		$SqlCPF = 'SELECT * FROM TB_PESSOA WHERE CPF = "'.$doc.'"';
		$SqlCNPJ = 'SELECT * FROM TB_EMPRESA WHERE CNPJ = "'.$doc.'"';
		$resultado = $GLOBALS['conexao']->query($SqlCPF);

		if($resultado->num_rows>0){
			$p = $resultado->fetch_array();
			$_SESSION['nome'] = $p['NMPESSOA'];
			$_SESSION['cd'] = $p['CDPESSOA'];
			$_SESSION['pessoa'] = "pf";
			header("location: ");
		}
		else{

			$resultado = $GLOBALS['conexao']->query($SqlCNPJ);
			$p = $resultado->fetch_array();
			if($resultado->num_rows>0){
				$_SESSION['nome'] = $p['NMFANTASIA'];
				$_SESSION['cd'] = $p['CDEMPRESA'];
				$_SESSION['pessoa'] = "pj";
				header("location: ");
			}
			else{
				echo "Usurá inexistente ou longin inválido.";
			}
		}
	}

					// *_-_* CAMPO DOS CPF's*_-_* \\

			// _-_ INSERINDO CPF NO BANCO DE DADOS _-_ \\
 	function cadPessoa($Nome, $CPF, $DtNasc, $BairroCPF, $EnderecoCPF, $NumeroCPF, $ComplementoCPF, $ReferenciaCPF, $TelCPF, $Tel2CPF, $EmailCPF){
 		$envio = 'INSERT INTO TB_PESSOA VALUES (NULL, "'.$Nome.'", "'.$CPF.'", "'.$DtNasc.'", "'.$BairroCPF.'", "'.$EnderecoCPF.'", "'.$NumeroCPF.'", "'.$ComplementoCPF.'", "'.$ReferenciaCPF.'", "'.$TelCPF.'", "'.$Tel2CPF.'", "'.$EmailCPF.'")';
 		$resultado = $GLOBALS['conexao']->query($envio);
 		$_SESSION['cdcpf'] = $resultado->insert_id;

		if($resultado){
			echo "Civil $Nome, cadastrado com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar usuário: ".$GLOBALS['conexao']->error;
		}
 	}

					
 					// *_-_* CAMPO DAS ATIVIDADES *_-_* \\

			// _-_ INSERINDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function cadAtv($NmAtv, $DtAtv, $DescricaoAtv, $BairroAtv, $EnderecoAtv, $NumeroAtv, $ComplementoAtv, $ReferenciaAtv, $TelAtv, $Tel2Atv, $EmailAtv,$cdCPF){
 		$envio = 'INSERT INTO TB_ATIVIDADE VALUES ("'.$NmAtv.'","'.$DtAtv.'", "'.$DescricaoAtv.'", "'.$BairroAtv.'", "'.$EnderecoAtv.'", "'.$NumeroAtv.'", "'.$ComplementoAtv.'", "'.$ReferenciaAtv.'", "'.$TelAtv.'", "'.$Tel2Atv.'", "'.$EmailAtv.'","'.$cdCPF.'")';
 		$resultado = $GLOBALS['conexao']->query($envio);

		if($resultado){
			echo "Atividade $NmAtv cadastrada com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar atividade: ".$GLOBALS['conexao']->error;
		}
		$cdAtv = $resultado->insert_id;
 	}

			// _-_ DELETANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function DelAtv($cdAtv){
 		$envio = "DELETE FROM TB_ATIVIDADE WHERE CDATIVIDADE = $cdAtv";
 		$resultado = $GLOBALS['conexao']->query($envio);

		if($resultado){
			echo "Atividade excluída com sucesso! ";
		}
		else{
			echo "Ação não realizada: ".$GLOBALS['conexao']->error;
		}
 	}

			// _-_ LISTANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function ListAtv(){
 		$envio = "SELECT * FROM TB_ATIVIDADE";
 		$resultado = $GLOBALS['conexao']->query($envio);

		return $resultado;
 	}


				 	// *_-_* CAMPO DOS CNPJ's*_-_* \\

			// _-_ INSERINDO CNPJ NO BANCO DE DADOS _-_ \\
 	function cadEmpresa($NmFant, $CNPJ, $BairroCNPJ, $EnderecoCNPJ, $NumeroCNPJ, $ComplementoCNPJ, $ReferenciaCNPJ, $TelCNPJ, $Tel2CNPJ, $EmailCNPJ){
 		$envio = 'INSERT INTO TB_PESSOA VALUES (NULL, "'.$NmFant.'", "'.$CNPJ.'", "'.$BairroCNPJ.'", "'.$EnderecoCNPJ.'", "'.$NumeroCNPJ.'", "'.$ComplementoCNPJ.'", "'.$ReferenciaCNPJ.'", "'.$TelCNPJ.'", "'.$Tel2CNPJ.'", "'.$EmailCNPJ.'")';
 		$resultado = $GLOBALS['conexao']->query($envio);
 		$_SESSION['cdcnpj'] = $resultado->insert_id;

		if($resultado){
			echo "Empresa $NmFant, cadastrada com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar estabelecimento: ".$GLOBALS['conexao']->error;
		}
 	}

 					// *_-_* CAMPO DOS EVENTOS *_-_* \\

			// _-_ INSERINDO EVENTOS NO BANCO DE DADOS _-_ \\
 	function cadEvt($NmEvt, $DtEvt, $DescricaoEvt, $BairroEvt, $EnderecoEvt, $NumeroEvt, $ComplementoEvt, $ReferenciaEvt, $TelEvt, $Tel2Evt, $EmailEvt, $cdCNPJ){
 		$envio = 'INSERT INTO TB_EVENTO VALUES ("'.$NmEvt.'","'.$DtEvt.'", "'.$DescricaoEvt.'", "'.$BairroEvt.'", "'.$EnderecoEvt.'", "'.$NumeroEvt.'", "'.$ComplementoEvt.'", "'.$ReferenciaEvt.'", "'.$TelEvt.'", "'.$Tel2Evt.'", "'.$EmailEvt.'","'.$cdCNPJ.'")';
 		$resultado = $GLOBALS['conexao']->query($envio);

		if($resultado){
			echo "Atividade $NmEvt cadastrada com sucesso! ";
		}
		else{
			echo "Erro ao cadastrar atividade: ".$GLOBALS['conexao']->error;
		}
		$cdEvt = $resultado->insert_id;
 	}

 				// _-_ DELETANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function DelEvt($cdEvt){
 		$envio = "DELETE FROM TB_EVENTO WHERE CDEVENTO = $cdEvt";
 		$resultado = $GLOBALS['conexao']->query($envio);

		if($resultado){
			echo "Atividade excluída com sucesso! ";
		}
		else{
			echo "Ação não realizada: ".$GLOBALS['conexao']->error;
		}
 	}

			// _-_ LISTANDO ATIVIDADES NO BANCO DE DADOS _-_ \\
 	function ListEvt(){
 		$envio = "SELECT * FROM TB_EVENTO";
 		$resultado = $GLOBALS['conexao']->query($envio);

		return $resultado;
 	}
?>