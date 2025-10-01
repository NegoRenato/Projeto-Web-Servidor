<?php
    session_start();
    if(empty($_SESSION['alunoLogado']) || $_SESSION['alunoLogado'] == false) {
        header('location: ./Controller/LoginController.php');
    }
    require('../View/AlunoView.php');
    
    if (!isset($_SESSION['alunos'])) {
        require('../Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }
?>