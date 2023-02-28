<?php


function validaLinha(string $linha) : bool
{
    if(strlen($linha)<4 || strlen($linha)>4 && strlen($linha) <7 || strlen($linha)>7 )
    {
        setarMensagemErro('<h3> O número da linha deve estar entre 4 e 7 Caracteres <h3> <br>');
        return false;
    } else if(count(buscaOnibus($linha)) == 0){
        setarMensagemErro('<h3> Ops! o valor de determinada linha não existe no sistema <h3> <br>');
        return false;
    }
    return true;
}