<meta charset="utf-8">

<a href="conexao.php"></a>

<?php
    include("conexao.php");
    if($_POST){
        //CAD - CNPJ\\
        $NmFant = $_POST[''];
        $CNPJ = $_POST[''];
        $BairroCNPJ= $_POST[''];
        $EnderecoCNPJ = $_POST[''];
        $NumeroCNPJ = $_POST[''];
        $ComplementoCNPJ = $_POST[''];
        $ReferenciaCNPJ = $_POST[''];
        $TelCNPJ = $_POST[''];
        $Tel2CNPJ = $_POST[''];
        $EmailCNPJ = $_POST[''];
        //CAD - EVENTOSCNPJ\\
        $NmEvt = $_POST[''];
        $DtEvt = $_POST[''];
        $descricaoEvt = $_POST[''];
        $BairroEvt =$_POST[''];
        $EnderecoEvt = $_POST[''];
        $NumeroEvt = $_POST[''];
        $ComplementoEvt = $_POST[''];
        $ReferenciaEvt = $_POST[''];
        $TelEvt = $_POST[''];
        $Tel2Evt = $_POST[''];
        $EmailEvt = $_POST[''];

    cadEmpresa($NmFant, $CNPJ, $BairroCNPJ, $EnderecoCNPJ, $NumeroCNPJ, $ComplementoCNPJ, $ReferenciaCNPJ, $TelCNPJ, $Tel2CNPJ, $EmailCNPJ);

    cadEvt($NmEvt, $DtEvt, $DescricaoEvt, $BairroEvt, $EnderecoEvt, $NumeroEvt, $ComplementoEvt, $ReferenciaEvt, $TelEvt, $Tel2Evt, $EmailEvt,$_SESSION['cdcnpj']);
}
?>