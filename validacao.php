<?php

include_once('./config.php');

$nome = limpaPost($_POST["nome"]);
$sobreNome = limpaPost($_POST["sobrenome"]);
$dataNascimento = limpaPost($_POST["dataNascimento"]);
$senha = limpaPost(password_hash($_POST["senha"], PASSWORD_DEFAULT));
$endereco = limpaPost($_POST["endereco"]);
$cep = limpaPost($_POST["cep"]);
$complemento = limpaPost($_POST["complemento"]);
$telefone = limpaPost($_POST["telefone"]);
$cpf = limpaPost($_POST["cpf"]);
$cidade = limpaPost($_POST["cidade"]);
$estado = limpaPost($_POST["estado"]);
$email = limpaPost($_POST["email"]);

$arquivo = "
    <html>
        <p>Seja bem vindo ao nosso sistema <b>$nome</b>!</p>
    </html>
";

$assunto = "Mensagem de Boas Vindas";

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

mail($email, $assunto, $arquivo, $headers);


if (empty($nome)) {
    echo "Favor preencher campo Nome";
    exit();
}  else if (is_numeric($nome)) {
    echo "Digitar somente letras";
    exit();
 } //else if (preg_match('/[a-zA-Z\s]{1,}/', $nome)) {
//     // echo 'Nome OK!';
//     echo 'Nome tem caracteres inválidos...';
// } else {
//     //exit();
// }

echo "<br>";

if (empty($sobreNome)) {
    echo "Favor preencher campo Sobrenome";
    exit();
} else if (is_numeric($sobreNome)) {
    echo "Digitar somente letras";
    exit();
} else if (preg_match('/[a-zA-Z\s]{1,}/', $sobreNome)) {
    // echo 'Sobrenome OK!';
} else {
    echo 'Sobrenome tem caracteres inválidos...';
    exit();
}

echo "<br>";

if (empty($email)) {
    echo "Favor preencher campo email";
    exit();
} else if (is_numeric($email)) {
    echo "Digitar somente letras";
    exit();
} else if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email)) {
    echo "Campo email invalido";
    exit();
}

echo "<br>";

if (empty($dataNascimento)) {
    echo "Favor preencher o campo Data de Nascimento";
    exit();
} else if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $dataNascimento)) {
    echo "Data inválida. Deve ser no formato XX/XX/XXXX";
    exit();
} else {
    // echo "Data OK";
}


echo "<br>";

if (empty($endereco)) {
    echo "Favor digitar o Endereço";
    exit();
} else {
    // echo "Campo endereço OK";
}

echo "<br>";

if (empty($cep)) {
    echo "Favor preencher o campo CEP";
    exit();
} else if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
    echo "CEP inválido. Deve ser no formato XXXXX ou XXXXX-XXX ";
    exit();
} else {
    // echo 'Cep OK';
}



echo "<br>";

if (empty($complemento)) {
    echo "Favor preencher o campo Complemento";
    exit();
} else if (is_numeric($complemento)) {
    echo "Digitar somente letras";
    exit();
} else if (preg_match('/[a-zA-Z\s]{1,}/', $complemento)) {
    // echo "Endereço OK";
} else {
    echo "Endereço tem caracteres inválidos...";
    exit();
}

echo "<br>";

if (empty($telefone)) {
    echo "Favor preencher o campo Telefone";
    exit();
}  else if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{5}-[0-9]{4}$^', $telefone)){
    echo "Telefone inváildo. Deve ser no formato (XXX) XXXX-XXXX";
    exit();
} else {
    // echo "Telefone OK";
}

if (empty($cpf)) {
    echo "Favor preencher campo CPF";
    exit();
}


echo "<br>";

if (empty($cidade)) {
    echo "Favor preencher o campo Cidade";
    exit();
} else if (is_numeric($cidade)) {
    echo "Digitar somente letras";
    exit();
} else if (preg_match('/[a-zA-Z\s]{1,}/', $cidade)) {
    // echo "Cidade OK";
} else {
    echo "Cidade tem caracteres inválidos...";
    exit();
}

function limpaPost($valor)
{
    $valor = trim($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}



$usuarioExiste = mysqli_query($conexao, "SELECT * FROM usuarios WHERE cpf = '$cpf'", MYSQLI_STORE_RESULT);
if (@mysqli_num_rows($usuarioExiste) > 0) {
    echo '
        <script type="text/javascript">
             alert("Esse usuario já existe"); 
        </script>
    ';
} else {
    $sql = "INSERT INTO usuarios(nome, sobrenome, email, data_nascimento, senha, endereco, cep, complemento, telefone, cpf, cidade, estado) 
    VALUES ('$nome', '$sobreNome', '$email', '$dataNascimento', '$senha', '$endereco', '$cep', '$complemento', '$telefone', '$cpf', '$cidade', '$estado')";
    $result = mysqli_query($conexao, $sql, MYSQLI_STORE_RESULT);


    echo '
        <script type="text/javascript">
            alert("Usuario incluído com sucesso!!!"); 
        </script>
    ';

   
}

 echo '<script type="text/javascript">location.replace("formulario.html");</script>';

?>



