<?php
    require('./Controller/PaginaInicialController.php');

    if($loginAluno == true){
        header('location: ./Controller/LoginController.php');
    }
    if($cadastroAluno == true){
        header('location: ./Controller/CadastrarController.php');
    }

    if($loginProfessor == true){
        header('location: ./Controller/LoginProfController.php');
    }
    if($cadastroProfessor == true){
        header('location: ./Controller/CadastrarProfController.php');
    }
?>