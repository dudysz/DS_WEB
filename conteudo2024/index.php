<?php
    //incluindo cabeçalho
    include('head.html');

    //incluindo o corpo
    if($idadeUsuario  >= 16){
      include('body.html');   
    }else{
        include('body copy.html');
    }
    include('body.html');

    //Incluindo o corpo em PHP
    include('body.php')

    //Incluindo o corpo em PHP com o riquered
        require_once('body.php');

    //incluindo o rodapé
    include('footer.html');
?>