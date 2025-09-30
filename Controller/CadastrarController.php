<?php
    session_start();

    if (!isset($_SESSION['alunos'])) {
        require('../Model/Aluno.php');
        $_SESSION['alunos'] = $Alunos;
    }
    
    $usuarioExiste = false;
    $mensagemErro = '';
    $mensagemCadastro = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['dataNascimento']) && !empty($_POST['usuario'])){
            $novoAluno = [
                'nome' => $_POST['nome'],
                'dataNascimento' => $_POST['dataNascimento'],
                'usuario' =>  $_POST['usuario'],
                'senha' => $_POST['senha'],
                'notas' => ['nota1' => 0, 'nota2' => 0, 'nota3' => 0] 
            ];
            foreach($_SESSION['alunos'] as $aluno){
                if($aluno['usuario'] == $novoAluno['usuario']){
                    $mensagemErro = 'nome de usuario ja existe';
                    $usuarioExiste = true;
                }
            }
            if(!$usuarioExiste){
                $_SESSION['alunos'][] = $novoAluno;
                $mensagemCadastro = 'usuario cadastrado com sucesso';
            }
        }else{
            $mensagemErro = 'Erro!!! Nao deixe nenhum campo em nulo';
        
        }
    }
    if(!empty($_GET['voltarCadastrar'])){
        header('location: ../index.php');
    }

    require('../View/CadastrarView.php');
?>