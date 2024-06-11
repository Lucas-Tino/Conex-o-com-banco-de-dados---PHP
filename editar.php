<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Edição</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Editar</h2>
        <?php 
            $pessoaController = new PessoaController();
            $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>

        <!-- o método do formulário é definido como POST e sua ação (para onde os dados serão enviados) como o arquivo pessoaController.php -->
        <form method="POST" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id'] ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pessoa['nome'];?>">
            </div>


            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa['endereco'];?>">
            </div>


            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $pessoa['bairro'];?>">
            </div>


            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $pessoa['cep'];?>">
            </div>


            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $pessoa['cidade'];?>">
            </div>


            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $pessoa['estado'];?>">
            </div>


            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa['telefone'];?>">
            </div>


            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $pessoa['celular'];?>">
            </div>


            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        <br>
    </div>
</body>
</html>
