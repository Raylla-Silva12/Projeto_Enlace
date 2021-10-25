<meta charset="utf-8">



<?php
	include("conexao.php");
    if($_POST){
     	//CAD - PESSOA\\
     	$Nome = $_POST[''];
     	$CPF = $_POST[''];
     	$DtNasc = $_POST[''];
     	$BairroCPF = $_POST[''];
     	$EnderecoCPF = $_POST[''];
     	$NumeroCPF = $_POST[''];
     	$ComplementoCPF = $_POST[''];
     	$ReferenciaCPF = $_POST[''];
     	$TelCPF = $_POST[''];
     	$Tel2CPF = $_POST[''];
     	$EmailCPF = $_POST[''];
     	//CAD - ATIVIDADE\\
     	$NmAtv = $_POST[''];
     	$DtAtv = $_POST[''];
     	$descricaoAtv = $_POST[''];
     	$BairroAtv =$_POST[''];
     	$EnderecoAtv = $_POST[''];
     	$NumeroAtv = $_POST[''];
     	$ComplementoAtv = $_POST[''];
     	$ReferenciaAtv = $_POST[''];
     	$TelAtv = $_POST[''];
     	$Tel2Atv = $_POST[''];
     	$EmailAtv = $_POST[''];

    cadPessoa($Nome, $CPF, $DtNasc, $BairroCPF, $EnderecoCPF, $NumeroCPF, $ComplementoCPF, $ReferenciaCPF, $TelCPF, $Tel2CPF, $EmailCPF);

    cadAtv ($NmAtv, $DtAtv, $DescricaoAtv, $BairroAtv, $EnderecoAtv, $NumeroAtv, $ComplementoAtv, $ReferenciaAtv, $TelAtv, $Tel2Atv, $EmailAtv, $_SESSION['cdcpf']);
}
?>