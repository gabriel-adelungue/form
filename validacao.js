function retira(objResp) {  
    var varString = new String(objResp.value);  
    var stringAcentos = new String("áàéóúãõâêíôçÁÀÉÓÚÃÕÂÊÍÔÇ?'(){}[]???!@#&*-+=|");  
    var stringSemAcento = new String("aaeouaoaeiocAAEOUAOAEIOC        *         ");  
      
    var i = new Number();  
    var j = new Number();  
    var cString = new String();  
    var varRes = '';  
      
    for (i = 0; i < varString.length; i++) {  
    cString = varString.substring(i, i + 1);  
    for (j = 0; j < stringAcentos.length; j++) {  
    if (stringAcentos.substring(j, j + 1) == cString){  
    cString = stringSemAcento.substring(j, j + 1);  
    }  
    }  
    varRes += cString;  
    }  
    objResp.value = varRes.toLowerCase();  
    }


    function somenteNumeros(objResp) {  
        var varString = new String(objResp.value);  
        var stringAcentos = new String("qwertyuiopasdfghjklçzxcvbnm!@#$%&*_+='[]{}:;<>");  
        var stringSemAcento = new String("                                              ");  
          
        var i = new Number();  
        var j = new Number();  
        var cString = new String();  
        var varRes = '';  
          
        for (i = 0; i < varString.length; i++) {  
        cString = varString.substring(i, i + 1);  
        for (j = 0; j < stringAcentos.length; j++) {  
        if (stringAcentos.substring(j, j + 1) == cString){  
        cString = stringSemAcento.substring(j, j + 1);  
        }  
        }  
        varRes += cString;  
        }  
        objResp.value = varRes.toLowerCase();  
        }




function validar() {
    var nome = formuser.nome.value;
    var sobrenome = formuser.sobrenome.value;
    var dataNascimento = formuser.dataNascimento.value;
    var endereco = formuser.endereco.value;
    var cep = formuser.cep.value;
    var complemento = formuser.complemento.value;
    var telefone = formuser.telefone.value;
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
    }


    if(sobrenome == ""){
        alert("Favor preencher campo Sobrenome");
        formuser.sobrenome.focus();
        return false;
    } else if (!isNaN(sobrenome)){
        alert("Digitar somente letras");
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
    
    