<?php
    // conexão entre este arquivo e o pessoaController.php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg bg-success">
        <p class="text-white fs-2 text-center mx-auto my-auto">Projeto Web - Banco de Dados</p>
    </nav>

    <div class="container bg-light rounded px-4 py-3">
        <h1>Consulta</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // cria um objeto pessoaController da classe PessoaController
                    $pessoaController = new PessoaController();
                    // cria uma variável pessoas que recebe o resultado da função listar da variável pessoaController (ou seja, a array dos registros)
                    $pessoas = $pessoaController->listar();
                    // laço de repetição para exibir três atributos (nome, telefone, celular) de cada pessoa/registro em pessoas em forma de tabela
                    foreach($pessoas as $pessoa) {
                    ?>
                        <tr>
                            <td><?php echo $pessoa['nome'];?></td>
                            <td><?php echo $pessoa['telefone'];?></td>
                            <td><?php echo $pessoa['celular'];?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $pessoa['id'];?>&acao=" class="btn btn-primary me-3">Editar</a>
                                <a href="excluir.php?id=<?php echo $pessoa['id'];?>&acao=" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>