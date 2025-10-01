<?php
    session_start();

    if (!isset($_SESSION['alunos'])) {
        require('./Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }

    if (!isset($_SESSION['professores'])) {
        require('./Model/Professor.php');
        $_SESSION['professores'] = $Professores;
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
    if(!empty($_GET['Logout'])){
        $_SESSION['alunoLogado'] = false;
        $_SESSION['profLogado'] = false;
    }
    require('./View/PaginaInicial.php');