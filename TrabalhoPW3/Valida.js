function validaCampos(){

    var campos = document.getElementsByTagName("input");

    for (var i = 0; i < 6; i++){
        if(campos[i].value == ""){
            alert("Preencha o campo " + campos[i].name + "!!");
            return;
        }
    }
    formUsuario.submit();
}

function validaLixo(){
 
    var campos = document.getElementsByTagName("input");

    for (var i = 0; i < 4; i++){
        if(campos[i].value == ""){
            alert("Preencha o campo " + campos[i].name + "!!");
            return;
        }
    }

    var quantidade = campos[2].value;
    quantidade = parseFloat(quantidade);
    if (quantidade < 0 ){
        alert("O numero não pode ser negativo !!");
        campos[2].focus();
        return;
    }
    formLixo.submit();
}