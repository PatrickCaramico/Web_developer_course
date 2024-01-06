<? require_once "./assets/php/validador_acesso.php" ?>

<?php
    //chamados
    $chamado = array();

    //abrir o arquivo.hd
    $arquivo = fopen('../../Projects_only/12°App-file/arquivo.hd', 'r');

    //enquanto houver registros (linhas) a serem recuperados
    while(!feof($arquivo)) { //testa pelo fim do arquivo
        //linhas
        $registro = fgets($arquivo);
        $chamado[] = $registro;
    }
    //fechar o arquivo aberto
    fclose($arquivo);

      

    //...
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- link Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Consulta - App Help Desk | Patrick Caramico</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="nav-link">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de chamado
                    </div>

                    <div class="card-body">

                        <? foreach($chamado as $chamado){ ?>

                        <?php
                            $chamado_dados = explode('#', $chamado);
                            //
                            if($_SESSION['perfil_id'] == 2) {
                                //só vamos exibir o chamado, se ele foi criado pelo usuario
                                if($_SESSION['id'] != $chamado_dados[0]) {
                                    continue;
                                }
                            }

                            if(count($chamado_dados) < 3) {
                                continue;
                            }
                        ?>
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                                <p class="card-text"><?=$chamado_dados[3]?></p>
                            </div>
                        </div>

                        <? } ?>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="../php/home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>