<?php

    session_start();
    //print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {
        // Acessa o sistema
        include_once('config.php');
        $nome = addslashes($_POST['nome']);
        $senha = addslashes($_POST['senha']);

        // print_r('Nome: ' . $nome);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha' ";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);
        if(mysqli_num_rows($result) < 1) {
            // unset() — Destrói a variável especificada
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('Location: login.html');
        } else {
            // Variaveis de sessão
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    } else {
        // Não acessa
        
        header('Location: login.html');

    }
?>