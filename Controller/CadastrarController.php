<?php
    session_start();

    if (!isset($_SESSION['alunos'])) {
        require('../Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }
    
    $cadastroSucesso = false;
    $mensagemErro = '';

    if(!empty($_POST)){
        $aluno = [
            'nome' => $_POST['nome'],
            'dataNascimento' => $_POST['dataNascimento'],
            'usuario' =>  $_POST['usuario'],
            'senha' => $_POST['senha'],
            'notas' => ['nota1' => 0, 'nota2' => 0, 'nota3' => 0] 
        ];
        $_SESSION['alunos'][] = $aluno;

        echo 'usuario cadastrado com sucesso';
    }else{
        $mensagemErro = 'Erro!!! Nao deixe nenhum campo em nulo';
    }
    if(!empty($_GET['voltarCadastrar'])){
        header('location: ../index.php');
    }

    require('../View/CadastrarView.php');
?>