<?php
    require('./Controller/PaginaInicialController.php');

    if($loginAluno == true){
        header('location: ./Controller/LoginController.php');
    }
    if($cadastroAluno == true){
        header('location: ./Controller/CadastrarController.php');
    }
?>