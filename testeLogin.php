<?php

    session_start();
    //print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {
        // Acessa o sistema
        include_once('config.php');

        // Proteção contra SQL Injection - addslashes()
        $nome = addslashes($_POST['nome']);
        $senha = addslashes($_POST['senha']);

        // print_r('Nome: ' . $nome);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome'";
        $result = $conexao->query($sql);

        $usuario = $result->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            echo ("<script>
                    window.alert('Login efetuado com sucesso')
                    window.location.href='./sistema.php';
                    </script>"
                );
            // header('Location: sistema.php');
        } else {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            echo ("<script>
                    window.alert('Usuario ou senha invalido')
                    window.location.href='./login.html';
                    </script>"
                );
            // header('Location: login.html');
        }
        


        //Código antigo sem HASH
        // print_r($sql);
        // print_r($result);
        // if(mysqli_num_rows($result) < 1) {
        //     // unset() — Destrói a variável especificada
            // unset($_SESSION['nome']);
            // unset($_SESSION['senha']);
            // header('Location: login.html');
        // } else {
        //     // Variaveis de sessão
            // $_SESSION['nome'] = $nome;
            // $_SESSION['senha'] = $senha;
            // header('Location: sistema.php');
        // }
    }  else {
        // Não acessa
        
        echo ("<script>
                    window.alert('Preencha todos os campos para poder se logar')
                    window.location.href='./login.html';
                    </script>"
                );
        //header('Location: login.html');
       
    }
?>
