<?php
    require('./Model/Aluno.php');
    require('./View/Login.php');

    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        if($Alunos['usuario'] == $_POST['usuario'] && $Alunos['senha'] == $_POST['senha']){
            header('location: ./Controller/AlunoController.php');
        }else{
            echo 'Nome de usuario ou senha invalido';
        }
    }else{
        echo 'Preencha os campo em nulo';
    }
?>