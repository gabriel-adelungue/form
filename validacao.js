function validar() {
    var nome = formuser.nome.value;
    var sobrenome = formuser.sobrenome.value;
    var dataNascimento = formuser.dataNascimento.value;
    var senha = formuser.senha.value;
    var endereco = formuser.endereco.value;
    var cep = formuser.cep.value;
    var complemento = formuser.complemento.value;
    var telefone = formuser.telefone.value;
    var cpf = formuser.cpf.value;
    var cidade = formuser.cidade.value;
    var estado = formuser.estado.value;
    var email = formuser.email.value;


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

    if(email == ""){
        alert("Favor preencher campo Email");
        formuser.email.focus();
        return false;
    } else if (!isNaN(email)){
        alert("Digitar somente letras");
        formuser.email.focus();
        return false;
    } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        alert("Campo email inválido!");
        formuser.email.focus();
        return false;
    }

    if(dataNascimento == ""){
        alert("Favor preencher campo Data de nascimento");
        formuser.dataNascimento.focus();
        return false;
    }

    if(senha == ""){
        alert("Favor preencher campo Senha");
        formuser.senha.focus();
        return false;
    } else if(senha.length < 2) {
        alert("Senha deve conter no minimo 2 caracteres");
        formuser.senha.focus();
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
    } else if (complemento.match(/[^a-zà-ú]/gi)) {
        alert("Campo Complemento contém caracteres invalidos");
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
    
    if(estado == ""){
        alert("Favor preencher campo Estado");
        formuser.estado.focus();
        return false;
    }

}
    
    
