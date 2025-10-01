<?php
    session_start();

    if (!isset($_SESSION['professores'])) {
        require('../Model/Professor.php');
        $_SESSION['professores'] = $Professores;
    }
    
    $usuarioExiste = false;
    $mensagemErro = '';
    $mensagemCadastro = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['dataNascimento']) && !empty($_POST['usuario'])){
            $novoProfessor = [
                'nome' => $_POST['nome'],
                'dataNascimento' => $_POST['dataNascimento'],
                'usuario' =>  $_POST['usuario'],
                'senha' => $_POST['senha'],
                'notas' => ['nota1' => 0, 'nota2' => 0, 'nota3' => 0] 
            ];
            foreach($_SESSION['professores'] as $professor){
                if($professor['usuario'] == $novoProfessor['usuario']){
                    $mensagemErro = 'nome de usuario ja existe';
                    $usuarioExiste = true;
                }
            }
            if(!$usuarioExiste){
                $_SESSION['professores'][] = $novoProfessor;
                $mensagemCadastro = 'usuario cadastrado com sucesso';
            }
        }else{
            $mensagemErro = 'Erro!!! Nao deixe nenhum campo em nulo';
        
        }
    }
    if(!empty($_GET['voltarCadastrar'])){
        header('location: ../index.php');
    }

    require('../View/CadastrarProfView.php');
?>