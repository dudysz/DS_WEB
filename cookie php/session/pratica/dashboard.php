<?php
    session_start();
    $loginCerto = 'duda';
    $senhaCerto = '030108';


    session_start();
    //verifica se veio o fomulário
    if(isset($_POST['login'])){
    }
        //verifica se o login esta correto
        if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];  
        }

    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){


   echo '<br>';
   echo $_POST['login'];
   echo '<br>';
   echo $_POST['senha'];
    }else{
        header('location:index.php');
    }





?>