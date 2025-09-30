<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/LoginAluno.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form id="voltar" action="LoginController.php" method="get">
            <input class="botao" type="submit" name="voltarLogin" value="pagina inicial">
        </form>
        <h2>Login Aluno</h2>
        <form id="login" action="LoginController.php" method="post">
            <label for="usuario">Usuario: <input class="caixa-texto" type="text" name="usuario"></label>
            <label for="senha">Senha: <input class="caixa-texto" type="password" name="senha"></label>
            <button class="botao" >LOGAR</button>
            <?php if (!empty($mensagem_erro)) : ?>
                <p style="color: red;"><?php echo $mensagem_erro; ?></p>
            <?php endif; ?>
        </form>
    </main>
</body>
</html>