function validar() {
    var nome = formuser.nome.value;
    var sobrenome = formuser.sobrenome.value;
    var dataNascimento = formuser.dataNascimento.value;
    var endereco = formuser.endereco.value;
    var cep = formuser.cep.value;
    var complemento = formuser.complemento.value;
    var telefone = formuser.telefone.value;
    var cpf = formuser.cpf.value;
    var cidade = formuser.cidade.value;
    var estado = formuser.estado.value;


    if(nome == ""){
        alert("Favor preencher campo Nome");
        formuser.nome.focus();
        return false;
    } else if (!isNaN(nome)){
        alert("Digitar somente letras");
        formuser.nome.focus();
        return false;
    } else if (nome.length < 2) {
        alert("Campo Nome deve ter no minimo 2 caracteres")
        formuser.nome.focus();
        return false;
    } else if (nome.match(/[^a-zà-ú]/gi)) {
        alert("Campo Nome contém caracteres invalidos");
        formuser.nome.focus();
        return false;
    }


    if(sobrenome == ""){
        alert("Favor preencher campo Sobrenome");
        formuser.sobrenome.focus();
        return false;
    } else if (!isNaN(sobrenome)){
        alert("Digitar somente letras");
        formuser.sobrenome.focus();
        return false;
    } else if (sobrenome.length < 2) {
        alert("Campo Sobrenome deve ter no minimo 2 caracteres")
        formuser.sobrenome.focus();
        return false;
    } else if (sobrenome.match(/[^a-zà-ú]/gi)) {
        alert("Campo Sobrenome contém caracteres invalidos");
        formuser.sobrenome.focus();
        return false;
    }

    if(dataNascimento == ""){
        alert("Favor preencher campo Data de nascimento");
        formuser.dataNascimento.focus();
        return false;
    }

    if(endereco == ""){
        alert("Favor preencher campo Endereço");
        formuser.endereco.focus();
        return false;
    }

    if(cep == ""){
        alert("Favor preencher campo Cep");
        formuser.cep.focus();
        return false;
    }

    if(complemento == ""){
        alert("Favor preencher campo Complemento");
        formuser.complemento.focus();
        return false;
    } else if (!isNaN(complemento)){
        alert("Digitar somente letras");
        formuser.complemento.focus();
        return false;
    }


    if(telefone == ""){
        alert("Favor preencher campo Telefone");
        formuser.telefone.focus();
        return false;
    }

    if(cpf == ""){
        alert("Favor preencher campo CPF");
        formuser.cpf.focus();
        return false;
    }

    if(cidade == ""){
        alert("Favor preencher campo Cidade");
        formuser.cidade.focus();
        return false;
    } else if (!isNaN(cidade)){
        alert("Digitar somente letras");
        formuser.cidade.focus();
        return false;
    }
}

    
    
