Projeto de Web-Servidor Parte 01

Equipe: Renato Antonio dos Santos Camargo, Flavio Cesar.

Projeto de um Sistema Escolar

O projeto contem as seguintes operações.

Cadastrar Aluno: O Usuario deve inserir as informações requsitadas do formulario, e podera registrar um Aluno no sistema. Pode Acontecer os Seguintes Erros. Caso o Usuario deixe algum campo em Nulo o sistema retornara uma mensagem de erro. Caso o Usuario Cadastre um Aluno com o Mesmo nome de usuario, o Sistema emitira um erro.

Login Aluno: O Usuario deve inserir as informações requsitadas do formulario, e ele sera transferido para uma outra pagina do sistema. O unico erro que sera mostrado e caso o usuario e senha estejam incorretos.

Pagina Segura do Aluno: A pagina segura do Aluno contera tres informações, Consultar Boletim, Consultar dados do Aluno, Realizar Prova, Sair (tirando a parte de sair as demais operações serão aplicadas na segunda parte do projeto).

Cadastrar Professor: O Usuario deve inserir as informações requsitadas do formulario, e podera registrar um Professor no sistema. Pode Acontecer os Seguintes Erros. Caso o Usuario deixe algum campo em Nulo o sistema retornara uma mensagem de erro. Caso o Usuario Cadastre um Professor com o Mesmo nome de usuario, o Sistema emitira um erro.

Login Professor: O Usuario deve inserir as informações requsitadas do formulario, e ele sera transferido para uma outra pagina do sistema. O unico erro que sera mostrado e caso o usuario e senha estejam incorretos.

Pagina Segura do Professor: A pagina segura do Professor contera tres informações,Consultar Alunos , Consultar dados do Professor, Corrigir Prova, Sair (tirando a parte de sair as demais operações serão aplicadas na segunda parte do projeto).

Instalação

 Para instalar a aplicação, deve ter instalado o xampp e o mysql, e deve criar uma pasta no diretorio C:\xampp\htdocs, e transferir os arquivos do meu diretorio git para a pasta criada, apos criado a pasta, a pagina deve executar o link http://localhost/nomeda-pasta-que-o-usuario-criou/index.php.

Minha Parte do trabalho

 Fui responsavel por criar a logica de login e de cadastro de Aluno, e os caminhos do arquivo que leva de uma pagina para outra.

 Parte do Flavio Cesar

 Foi responsavel por criar a logica de de manter Login de Professor e Aluno, fazendo com que caso o usuario tivesse uma session de logado, e ele caso ele saia da pagina segura sem deslogar, faz com que o usuario volte para a pagina segura. E pela logica de que caso um usuario tente acessar a pagina segura atraves de um link, fazer com que ele seja redirecionado para a pagina de login.
