<?php
include "Model/ServicoMensagemSecao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link href="style.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <form action="./Web/script.php" method="post">
        <div class="mb-3 container">
        <?php
            $mensagemDeSucesso = obterMensagemSucesso();
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemErro();
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
        ?>
            <div>
                <p>Número da Linha: <input class="form-control" type="text" name="linha" /></p>
                <p><input onClick="<h1> Loading.. <h1>" class="btn btn-primary" type="submit" value="Verificar"/></p>
            </div>
        </div>
    </form>
    
    
</body>
</html>