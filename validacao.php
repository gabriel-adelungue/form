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
} else if (preg_match('/[a-zA-Z\s]{1,}/', $nome)) {
    echo 'Nome OK!';
} else {
    echo 'Nome tem caracteres inválidos...';
}

echo "<br>";

if (empty($sobreNome)) {
    echo "Favor preencher campo Sobrenome";
} else if (is_numeric($sobreNome)) {
    echo "Digitar somente letras";
} else if (preg_match('/[a-zA-Z\s]{1,}/', $sobreNome)) {
    echo 'Sobrenome OK!';
} else {
    echo 'Sobrenome tem caracteres inválidos...';
}

echo "<br>";

if (empty($dataNascimento)) {
    echo "Favor preencher o campo Data de Nascimento";
} else if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $dataNascimento)) {
    echo "Data inválida. Deve ser no formato XX/XX/XXXX";
} else {
    echo "Data OK";
}


echo "<br>";

if (empty($endereco)) {
    echo "Favor digitar o Endereço";
} else {
    echo "Campo endereço OK";
}

echo "<br>";

if (empty($cep)) {
    echo "Favor preencher o campo CEP";
} else if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
    echo "CEP inválido. Deve ser no formato XXXXX ou XXXXX-XXX ";
} else {
    echo 'Cep OK';
}



echo "<br>";

if (empty($local)) {
    echo "Favor preencher o campo Local";
} else if (is_numeric($local)) {
    echo "Digitar somente letras";
} else if (preg_match('/[a-zA-Z\s]{1,}/', $local)) {
    echo "Endereço OK";
} else {
    echo "Endereço tem caracteres inválidos...";
}

echo "<br>";

if (empty($telefone)) {
    echo "Favor preencher o campo Telefone";
}  else if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{5}-[0-9]{4}$^', $telefone)){
    echo "Telefone inváildo. Deve ser no formato (XXX) XXXX-XXXX";
} else {
    echo "Telefone OK";
}


echo "<br>";

if (empty($cidade)) {
    echo "Favor preencher o campo Cidade";
} else if (is_numeric($local)) {
    echo "Digitar somente letras";
} else if (preg_match('/[a-zA-Z\s]{1,}/', $cidade)) {
    echo "Cidade OK";
} else {
    echo "Cidade tem caracteres inválidos...";
}

?>
