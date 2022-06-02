<?php

if (!empty($_GET['id'])) {

    include_once('./config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0){
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data["nome"];
            $sobreNome = $user_data["sobrenome"];
            $dataNascimento = $user_data["data_nascimento"];
            $senha = $user_data['senha'];
            $endereco = $user_data["endereco"];
            $cep = $user_data["cep"];
            $complemento = $user_data["complemento"];
            $telefone = $user_data["telefone"];
            $cpf = $user_data["cpf"];
            $cidade = $user_data["cidade"];
            $estado = $user_data["estado"];
        }
    } else {
        header('Location: sistema.php');
    }

} else {
    header('Location: sistema.php');
}


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</head>
<body>
    <a href="./sistema.php">Voltar</a>

    <h3 class="text-center">Formulário</h3>
 

    <form name="formuser" action="./saveEdit.php" method="post">

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" maxlength="25" onkeyup="maiuscula(this)" value="<?php echo $nome?>">
            </div>
    
            <div class="form-group col-md-4">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Sobrenome" maxlength="25" onkeyup="maiuscula(this)" value="<?php echo $sobreNome?>">
            </div>
    
            <div class="form-group col-md-4">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="text" id="dataNascimento" name="dataNascimento" class="form-control" value="<?php echo $dataNascimento?>">
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="senha">Senha:</label>
                <input type="text" id="senha" name="senha" class="form-control" placeholder="Senha" value="<?php echo $senha?>">
            </div>

            <div class="form-group col-md-4">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Rua Sabia, nº 0" onkeyup="maiuscula(this)" value="<?php echo $endereco?>">
            </div>
        
            <div class="form-group col-md-4">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" class="form-control" value="<?php echo $cep?>">
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Apartamento, hotel, casa, etc." onkeyup="maiuscula(this)" value="<?php echo $complemento?>">
            </div>
    
            <div class="form-group col-md-4">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" class="form-control"  placeholder="" value="<?php echo $telefone?>">
            </div>

            <div class="form-group col-md-4">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-control"  placeholder="" value="<?php echo $cpf?>">
            </div>
    
        </div>
        
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade" onkeyup="maiuscula(this)" value="<?php echo $cidade?>">
            </div>
    
            <div class="form-group col-md-4">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" name="estado" class="form-control" >
                    <option selected>Escolher</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceara</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goias</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Parana</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piaui</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button name="update" id="update" type="submit" class="btn btn-primary btn-lg" onclick="return validar()">Enviar</button>

        
    </form>

    <script>

        function maiuscula(transformaMaiuscula)
        {
            res = transformaMaiuscula.value.toUpperCase();
            transformaMaiuscula.value = res; 
        }

        $("#telefone").mask("(99) 99999-9999");
        $("#cep").mask("99999-999");
        $("#dataNascimento").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
    </script>
    
    <script src="./validacao.js"></script>


</body>
</html>



























    <!-- // if (empty($nome)) {
    //     echo "Favor preencher campo Nome";
    //     exit();
    // }  else if (is_numeric($nome)) {
    //     echo "Digitar somente letras";
    //     exit();
    // } else if (preg_match('/[a-zA-Z\s]{1,}/', $nome)) {
    //     // echo 'Nome OK!';
    //     echo 'Nome tem caracteres inválidos...';
    // } else {
    //     //exit();
    // }

    // echo "<br>";

    // if (empty($sobreNome)) {
    //     echo "Favor preencher campo Sobrenome";
    //     exit();
    // } else if (is_numeric($sobreNome)) {
    //     echo "Digitar somente letras";
    //     exit();
    // } else if (preg_match('/[a-zA-Z\s]{1,}/', $sobreNome)) {
    //     // echo 'Sobrenome OK!';
    // } else {
    //     echo 'Sobrenome tem caracteres inválidos...';
    //     exit();
    // }

    // echo "<br>";

    // if (empty($dataNascimento)) {
    //     echo "Favor preencher o campo Data de Nascimento";
    //     exit();
    // } else if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $dataNascimento)) {
    //     echo "Data inválida. Deve ser no formato XX/XX/XXXX";
    //     exit();
    // } else {
    //     // echo "Data OK";
    // }


    // echo "<br>";

    // if (empty($endereco)) {
    //     echo "Favor digitar o Endereço";
    //     exit();
    // } else {
    //     // echo "Campo endereço OK";
    // }

    // echo "<br>";

    // if (empty($cep)) {
    //     echo "Favor preencher o campo CEP";
    //     exit();
    // } else if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
    //     echo "CEP inválido. Deve ser no formato XXXXX ou XXXXX-XXX ";
    //     exit();
    // } else {
    //     // echo 'Cep OK';
    // }



    // echo "<br>";

    // if (empty($complemento)) {
    //     echo "Favor preencher o campo Complemento";
    //     exit();
    // } else if (is_numeric($complemento)) {
    //     echo "Digitar somente letras";
    //     exit();
    // } else if (preg_match('/[a-zA-Z\s]{1,}/', $complemento)) {
    //     // echo "Endereço OK";
    // } else {
    //     echo "Endereço tem caracteres inválidos...";
    //     exit();
    // }

    // echo "<br>";

    // if (empty($telefone)) {
    //     echo "Favor preencher o campo Telefone";
    //     exit();
    // }  else if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{5}-[0-9]{4}$^', $telefone)){
    //     echo "Telefone inváildo. Deve ser no formato (XXX) XXXX-XXXX";
    //     exit();
    // } else {
    //     // echo "Telefone OK";
    // }

    // if (empty($cpf)) {
    //     echo "Favor preencher campo CPF";
    //     exit();
    // }


    // echo "<br>";

    // if (empty($cidade)) {
    //     echo "Favor preencher o campo Cidade";
    //     exit();
    // } else if (is_numeric($cidade)) {
    //     echo "Digitar somente letras";
    //     exit();
    // } else if (preg_match('/[a-zA-Z\s]{1,}/', $cidade)) {
    //     // echo "Cidade OK";
    // } else {
    //     echo "Cidade tem caracteres inválidos...";
    //     exit();
    // } -->


