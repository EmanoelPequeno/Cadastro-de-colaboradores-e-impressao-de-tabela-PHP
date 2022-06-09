<?php

    $dados = $_POST;
    $dados = implode(" - ", $dados);

    $arquivo = fopen("colaboradores.txt", "a+");
    fwrite($arquivo, $dados."\n");
    fclose($arquivo);

    header("location: colaboradores.php");

?>