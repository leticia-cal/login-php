<?php
    session_start();
    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuario');
    
    //simulação de usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'nome' => 'Adm', 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'nome' => 'User', 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
        array('id' => 3, 'nome' => 'José', 'email' => 'jose@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
        array('id' => 4, 'nome' => 'Maria', 'email' => 'maria@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),

    );
    
    foreach($usuarios_app as $usuario){
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $usuario['id'];
            $usuario_nome = $usuario['nome'];
            $usuario_perfil_id = $usuario['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['nome'] =  $usuario_nome;
        $_SESSION['perfil_id'] =  $usuario_perfil_id;
        header('Location: select-action.php');
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
?>