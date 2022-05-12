<?php

$nome = $_POST["nome"];
$sobreNome = $_POST["sobrenome"];
$dataNascimento = $_POST["dataNascimento"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$local = $_POST["local"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];


if (empty($nome)) {
    echo "Favor preencher campo Nome";
}  else if (is_numeric($nome)) {
    echo "Digitar somente letras";
} else if (preg_match('/^[a-zA-Z0-9]+/', $nome) && !is_numeric($nome)) {
    echo 'Nome OK!';
} else {
    echo 'Nome tem caracteres inválidos...';
}

echo "<br>";

if (empty($sobreNome)) {
    echo "Favor preencher campo Sobrenome";
} else if (is_numeric($sobreNome)) {
    echo "Digitar somente letras";
} else if (preg_match('/^[a-zA-Z0-9]+/', $sobreNome) && !is_numeric($sobreNome)) {
    echo 'Sobrenome OK!';
} else {
    echo 'Sobrenome tem caracteres inválidos...';
}

echo "<br>";

if (empty($dataNascimento)) {
    echo "Favor preencher o campo Data de Nascimento";
} 


echo "<br>";

if (empty($endereco)) {
    echo "Favor digitar o Endereço";
} else if (is_numeric($endereco)) {
    echo "Digitar somente letras";
}

echo "<br>";

if (empty($cep)) {
    echo "Favor preencher o campo CEP";
} if(!preg_match("/\d{1,8}/", $cep)){    
    echo "Cep deve conter 8 digitos";    
} else if (is_numeric($cep) == false) {
    echo "Digitar somente números";
} else if (preg_match('/^[a-zA-Z0-9]+/', $cep)) { // preg_match('/^[a-zA-Z0-9]+/', $cep) - bloquear caracteres especiais
    echo 'Cep OK!';
} else {
    echo 'Cep tem caracteres inválidos...';
}



echo "<br>";

if (empty($local)) {
    echo "Favor preencher o campo Local";
} else if (is_numeric($local)) {
    echo "Digitar somente letras";
}

echo "<br>";

if (empty($telefone)) {
    echo "Favor preencher o campo Telefone";
} else if (!is_numeric($telefone)) {
    echo "Digitar somente números";
} else if (preg_match('/^[a-zA-Z0-9]+/', $telefone) && !is_numeric($telefone)) {
    echo 'Telefone OK!';
} else {
    echo 'Telefone tem caracteres inválidos...';
}


echo "<br>";

if (empty($cidade)) {
    echo "Favor preencher o campo Cidade";
} else if (is_numeric($cidade)) {
    echo "Digitar somente letras";
} else if (preg_match('/^[a-zA-Z0-9]+/', $cidade) && is_numeric($cidade)) {
    echo 'Cidade OK!';
} else {
    echo 'Cidade tem caracteres inválidos...';
}

?>