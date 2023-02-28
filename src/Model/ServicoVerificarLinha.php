<?php

require '../SPTrans.php';
function jsonEncodeAccents($form){
    return json_encode($form, JSON_UNESCAPED_UNICODE);
}
function VerificarLinha(string $linha) : ?string
{
    //strlen()
    
    if(validaLinha($linha)){
        removerMensagemErro();
        $onibus = buscaOnibus($linha);
        $lin = $onibus[0]['lt'];
        $mensagem = '<h3> Linha ' . $lin;
        $mensagem = $mensagem .  ": " . $onibus[0]['ts'] . " - " .  $onibus[0]['tp'] . "<h3>";
        $mensagem = $mensagem . atributosLinha($lin, $onibus);
        setarMensagemSucesso($mensagem);
        return null;

    }else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
