<? require_once "./assets/php/validador_acesso.php";
     
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home - App Help Desk | Patrick Caramico</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="../images/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-top">
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
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="../php/abrir_chamado.php">
                                    <img src="../images/formulario_abrir_chamado.png" alt="abrir" width="70" height="70">
                                </a>
                            </div>

                            <div class="col-6 d-flex justify-content-center">
                                <a href="../php/consulta_chamado.php">
                                    <img src="../images/formulario_consultar_chamado.png" alt="consulta" width="70" height="70">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>