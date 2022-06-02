<?php

    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST["nome"];
        $sobreNome = $_POST["sobrenome"];
        $dataNascimento = $_POST["dataNascimento"];
        $senha = $_POST['senha'];
        $endereco = $_POST["endereco"];
        $cep = $_POST["cep"];
        $complemento = $_POST["complemento"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', 
                            sobrenome='$sobreNome',
                            data_nascimento='$dataNascimento',
                            senha='$senha',
                            endereco='$endereco',
                            cep='$cep',
                            complemento='$complemento',
                            telefone='$telefone',
                            cpf='$cpf',
                            cidade='$cidade',
                            estado='$estado'
                    WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>