<?php
    session_start();

    if (!isset($_SESSION['alunos'])) {
    require('../Model/Aluno.php');
    $_SESSION['alunos'] = $Alunos;
}

    $mensagemErro = "";
    $loginSucesso = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
            
            foreach ($_SESSION['alunos'] as $aluno) {
                if ($aluno['usuario'] == $_POST['usuario'] && $aluno['senha'] == $_POST['senha']) {
                    $login_sucesso = true;
                    break; 
                }
            }

            if ($login_sucesso) {
                header('Location: ./AlunoController.php');
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

    require('../View/LoginView.php');