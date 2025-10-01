<?php
    session_start();
    if(empty($_SESSION['profLogado']) || $_SESSION['profLogado'] == false) {
        header('location: ./Controller/LoginProfController.php');
    }
    require('../View/ProfView.php');
    
    if (!isset($_SESSION['professores'])) {
        require('../Model/Professor.php');
        $_SESSION['professores'] = $Professores;
    }
?>