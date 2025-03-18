function validardadoscliente(){
    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        alert("preencha o campo nome corretamente!\nVerifique se o nome possui mais do que 2 caracteres.");
        return false;
    }
    if (formulario.email.value == ""||formulario.email.value.typeof('@')==-1 || formulario.email.value.typeof('.')==-1){
            
    }
}