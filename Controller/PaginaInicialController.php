<?php
    session_start();

    if (!isset($_SESSION['alunos'])) {
        require('./Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }

    $cadastroAluno = false;
    $loginAluno = false;
    $loginProfessor = false;
    $cadastroProfessor = false;

    if(!empty($_GET['cadastrarAluno'])){
        $cadastroAluno = true;
    }
    if(!empty($_GET['cadastrarProf'])){
        $cadastroProfessor = true;
    }
    if(!empty($_GET['LoginProf'])){
        $loginProfessor = true;
    }
    if(!empty($_GET['LoginAluno'])){
        $loginAluno = true;
    }
    require('./View/PaginaInicial.php');