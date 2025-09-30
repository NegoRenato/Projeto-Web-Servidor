<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Cadastrar.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form id="botaoVoltar" action="CadastrarController.php" method="get">
            <input class="botao" type="submit" name="voltarCadastrar" value="Voltar para pagina inicial">
        </form>
        <h2>Cadastro Aluno</h2>
        <form id="formulario" action="CadastrarController.php" method="post">
            <label for="1">Nome:<input class="caixa-texto" type="text" name="nome" id="1"><br><br></label>
            <label for="2">Data de Nascimento: <input type="date" name="dataNascimento" id="2"><br><br></label>
            <label for="3">nome de usuario: <input class="caixa-texto" type="text" name="usuario" id="3"><br><br></label>
            <label for="4">senha do usuario: <input class="caixa-texto" type="password" name="senha" id="4"> <br><br></label>
            <input class="botao" type="submit" value="Cadastrar">
        </form>
        <?php if (!empty($mensagemErro)) : ?>
            <p style="color: red;"><?php echo $mensagemErro; ?></p>
        <?php endif; ?>
        <?php if (!empty($mensagemCadastro)) : ?>
            <p style="color: green;"><?php echo $mensagemCadastro; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>