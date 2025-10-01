<?php
    session_start();
    if(empty($_SESSION['alunoLogado']) || $_SESSION['alunoLogado'] == false) {
        header('location: ./LoginController.php');
    }
    require('../View/AlunoView.php');
    
    if (!isset($_SESSION['alunos'])) {
        require('../Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }

    if(!empty($_GET['Logout'])){
        $_SESSION['alunoLogado'] = false;
        $_SESSION['profLogado'] = false;
        header('Location: ../index.php');
    }
?>