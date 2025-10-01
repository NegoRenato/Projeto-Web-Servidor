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

    if(!empty($_SESSION['alunoLogado']) && $_SESSION['alunoLogado']) {
        header('Location: ./Controller/AlunoController.php');
        exit();
    }

    if(!empty($_SESSION['profLogado']) && $_SESSION['profLogado']) {
            header('Location: ./Controller/ProfController.php');
            exit();
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