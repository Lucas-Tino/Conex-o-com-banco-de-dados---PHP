<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg bg-success">
        <p class="text-white fs-2 text-center mx-auto my-auto">Projeto Web - Banco de Dados</p>
    </nav>

    <div class="container bg-light rounded px-4 pt-3">
        <h1>Projeto Web - Site conectado com um banco de dados</h1>
        <p class="fs-5">
            Este site é o primeiro projeto integrado a um banco de dados que desenvolvi na matéria de Programação Web II, no segundo ano do curso de Desenvolvimento de Sistemas
            da ETEC da Zona Leste, seguindo as instruções do professor Jeferson.<br>
            O projeto foi desenvolvido em HTML e PHP, possui estilização básica de CSS (feita com o framework Bootstrap), e tem classes com funções que executam comandos SQL
            para cada uma das quatro operações CRUD (criar, consultar/ler, atualizar e deletar/excluir) em um banco de dados local.<br>
            Você pode criar um novo registro ou consultar os registros já existentes para editá-los ou excluí-los clicando nos botões abaixo:
        </p>
        <div class="row">
            <div class="col mb-3">
                <a href="cadastrar.php" class="btn btn-success btn-lg me-3">Cadastrar</a>
                <a href="consultar.php?acao=" class="btn btn-warning btn-lg">Consultar</a>
            </div>
        </div>
    </div>
</body>
</html>
