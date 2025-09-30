<?php
    session_start();
    require('../View/AlunoView.php');
    
    if (!isset($_SESSION['alunos'])) {
        require('../Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }
?>