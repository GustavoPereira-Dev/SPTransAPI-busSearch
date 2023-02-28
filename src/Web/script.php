<?php 
namespace Gustavo\ApiSptrans\Web;

//require 'SPTrans.php';

include "../Model/ServicoMensagemSecao.php";
include "../Model/ServicoValidacao.php";
include "../Model/ServicoVerificarLinha.php";
include "../Model/ServicoAtributosLinha.php";



$linha = $_POST['linha'];

for($i=0; $i<strlen($linha);$i++){
    if(ctype_alpha($linha[$i])){
        $linha[$i] = strtoupper($linha[$i]);
    }
}

VerificarLinha($linha);

header('location: ../index.php');
