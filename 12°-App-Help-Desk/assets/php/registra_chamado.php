<?php

    session_start();

    //estamos trabalhando na montagem do texto

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);;
    $descricao = str_replace('#', '-', $_POST['descricao']);;

    //implode('#', $_post);

    $texto = $_SESSION['id'] . '#' . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

    //abrindo o arquivo
    $arquivo = fopen('../../Projects_only/12°App-file/arquivo.hd','a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);
    // echo $texto;

    header('location: ../php/abrir_chamado.php');

?>