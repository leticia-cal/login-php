<?php
    session_start();
    //tratativa de texto    
    $titulo = str_replace('#', '-', $_POST['title']);
    $categoria = str_replace('#', '-', $_POST['category']);
    $descricao = str_replace('#', '-', $_POST['description']);

    $texto = $_SESSION['id'] . '#' . $_SESSION['nome'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abertura de arquivo
    $arquivo = fopen('registros.txt', 'a');

    //escrita do texto no arquivo
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    //redireciona pra pagina de escrever chamado (write-report)
    header('Location: write-report.php');
?>