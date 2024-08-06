<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg bg-success">
        <p class="text-white fs-2 text-center mx-auto my-auto">Projeto Web - Banco de Dados</p>
    </nav>

    <div class="container bg-light rounded px-4 pt-3">
        <h1>Editar</h1>
        <?php 
            // cria um objeto e atribui a ele uma instância de pessoaController
            $pessoaController = new PessoaController();
            // variável pessoa que recebe o resgistro corresponente ao id passado para a função buscarPorId
            $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>

        <!-- o método do formulário é definido como POST e sua ação (para onde os dados serão enviados) como o arquivo pessoaController.php, com a ação atualizar e o id selecionado -->
        <form method="POST" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id']; ?>">
            <div class="form-group mb-3">
                <label for="nome" class="fs-5">Nome:</label>
                <input type="text" class="form-control fs-5" id="nome" name="nome" value="<?php echo $pessoa['nome'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="endereco" class="fs-5">Endereço:</label>
                <input type="text" class="form-control fs-5" id="endereco" name="endereco" value="<?php echo $pessoa['endereco'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="bairro" class="fs-5">Bairro:</label>
                <input type="text" class="form-control fs-5" id="bairro" name="bairro" value="<?php echo $pessoa['bairro'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="cep" class="fs-5">CEP:</label>
                <input type="text" class="form-control fs-5" id="cep" name="cep" value="<?php echo $pessoa['cep'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="cidade" class="fs-5">Cidade:</label>
                <input type="text" class="form-control fs-5" id="cidade" name="cidade" value="<?php echo $pessoa['cidade'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="estado" class="fs-5">Estado:</label>
                <input type="text" class="form-control fs-5" id="estado" name="estado" value="<?php echo $pessoa['estado'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="telefone" class="fs-5">Telefone:</label>
                <input type="text" class="form-control fs-5" id="telefone" name="telefone" value="<?php echo $pessoa['telefone'];?>">
            </div>


            <div class="form-group mb-3">
                <label for="celular" class="fs-5">Celular:</label>
                <input type="text" class="form-control fs-5" id="celular" name="celular" value="<?php echo $pessoa['celular'];?>">
            </div>


            <button type="submit" class="btn btn-primary btn-lg">Editar</button>
        </form>
        <br>
    </div>
</body>
</html>
