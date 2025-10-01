<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Aluno.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Seja Bem vindo aluno: <?= $_SESSION["usuario"]?></h1>
        <form action="AlunoController.php" method="get">
            <input class="botao" type="submit" name="boletim" value="consultarBoletim">
            <input class="botao" type="submit" name="dadosAluno" value="consultar Dados do Aluno">
            <input class="botao" type="submit" name="Prova" value="realizar Prova">
            <input class="botao" type="submit" name="Logout" value="sair">
        </form>
    </header>
</body>
</html>