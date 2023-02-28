<?php


function atributosLinha(string $linha, array $onibus) : ?string
{
    
        
        if(!ctype_alpha($linha[3])){
            $msg = "<br> <h4> " . "Essa linha tem o tp na zona " . $linha[0];
        if($linha[1] == 7){
            $msg = $msg . "<br>" . "É integrada ao metrô";
        } else if($linha[1] > 0 && $linha[1]<7){
            $msg = $msg . "<br>" . "Termina pelo centro";
        } else{
            $msg = $msg . "<br>" . "É uma linha local que liga dois bairros";
        }
            $msg = $msg . "<br> Valor " . $linha[2] . $linha[3] . " é o valor diferencial da linha <h4> <br>";
        }
        if(ctype_alpha($linha[3])){
            $msg = "<br>" . "<h4> A linha se inicia na zona " . $linha[0]; 
            if($linha[1] == 7){
                $msg = $msg . "<br>" . "É integrada ao metrô";
            } else if($linha[1] == 0){
                $msg = $msg . "<br>" . "Passa pelo Centro";
            } else{
                $msg = $msg . "<br>" . "Não é integrada ao Metrô";
            }
            $msg = $msg . "<br>" . "A linha se finaliza na zona " . $linha[2]; 
            $msg = $msg . "<br> Valor " . $linha[3] . " é o diferencial de onde a linha vai<h4> "; 
        }

        if($linha[1]>0 && $linha[1]<7 && !ctype_alpha($linha[3])){
            $msg = $msg . "Essa linha é radial <br><br>";
        } else if(ctype_alpha($linha[3]) && $linha[1] == 0){
            $msg = $msg . "Essa linha é diametral <br><br>";
        } else if(ctype_alpha($linha[3]) && $linha[1]>0 && $linha[1]<7){
            $msg = $msg . "Essa linha é inter-regional <br><br>";
        } else{
            $msg = $msg . "Essa linha é regional <br><br>";
        }
        if(ctype_alpha($linha[0])){
            $msg = "<br>" . "A linha é noturna";
            $msg = $msg . "<br> A linha parte da zona " . $linha[1];
            $msg = $msg . "<br> Valor " . $linha[2] . $linha[3] . " é o valor diferencial da linha <br> <br> " ;
        }

        if(count($onibus)>2){
            $msg = $msg . "<br> <h2> Outros códigos da linha: <h2>";

            foreach ($onibus as $k => $v) {
                if($k % 2 == 0 && $k > 0){
                $msg = $msg . "<li>" . $v['lt'] . "-" . $v['tl'] . " : " . $v['ts'] . " - " . $v['tp'] . "</li>";
                }
            }
            $msg = $msg . " <br>";

        }
        
        return $msg;
}