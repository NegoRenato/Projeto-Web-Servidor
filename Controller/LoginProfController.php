<?php
    session_start();

    if (!isset($_SESSION['professores'])) {
        require('../Model/Professor.php');
        $_SESSION['professores'] = $Professores;
    }

    $mensagemErro = "";
    $loginSucesso = false;

    if(!empty($_SESSION['profLogado']) && $_SESSION['profLogado']) {
            header('Location: ./ProfController.php');
            exit();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
            
            foreach ($_SESSION['professores'] as $professor) {
                if ($professor['usuario'] == $_POST['usuario'] && $professor['senha'] == $_POST['senha']) {
                    $loginSucesso = true;
                    $_SESSION['usuario'] = $_POST['usuario'];
                    break; 
                }
            }

            if ($loginSucesso) {
                $_SESSION['profLogado'] = true;
                $_SESSION['alunoLogado'] = false;
                header('Location: ./ProfController.php');
                exit();
            } else {
                $mensagem_erro = "Nome de usuário ou senha inválido!";
            }

        } else {
            $mensagem_erro = "Por favor, preencha todos os campos.";
        }
    }

    if(!empty($_GET['voltarLogin'])){
        header('location: ../index.php');
    }

    require('../View/LoginProfView.php');