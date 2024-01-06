<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>12° App Help Desk | Patrick Caramico</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="./assets/images/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-top">
            App Help Desk
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">
                        <form action="./assets/php/valida_login.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>

                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                            <div class="text-danger">
                                Usuário ou senha inválidos(s)
                            </div> 
                                  
                            <? } ?>

                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                            <div class="text-danger">
                                Faça login antes de acessar as páginas protegidas
                            </div> 
                                  
                            <? } ?>
                            <button class="btn btn-lg btn-info btn-block" type="submit">
                                Entrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>