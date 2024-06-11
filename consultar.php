<?php
    // conexão entre este arquivo e o pessoaController.php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
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
                            <td><a href="editar.php?id=<?php echo $pessoa['id'];?>&acao=atualizar">Editar</a></td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>