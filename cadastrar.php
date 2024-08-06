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
        <h1>Cadastro</h1>
        <!-- o método do formulário é definido como POST e sua ação (para onde os dados serão enviados) como o arquivo pessoaController.php -->
        <form method="POST" action="controller/pessoaController.php?acao=inserir">
            <div class="form-group mb-3">
                <label for="nome" class="fs-5">Nome:</label>
                <input type="text" class="form-control fs-5" id="nome" name="nome" placeholder="Digite o nome">
            </div>


            <div class="form-group mb-3">
                <label for="endereco" class="fs-5">Endereço:</label>
                <input type="text" class="form-control fs-5" id="endereco" name="endereco" placeholder="Digite o endereço">
            </div>


            <div class="form-group mb-3">
                <label for="bairro" class="fs-5">Bairro:</label>
                <input type="text" class="form-control fs-5" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>


            <div class="form-group mb-3">
                <label for="cep" class="fs-5">CEP:</label>
                <input type="text" class="form-control fs-5" id="cep" name="cep" placeholder="Digite o cep">
            </div>


            <div class="form-group mb-3">
                <label for="cidade" class="fs-5">Cidade:</label>
                <input type="text" class="form-control fs-5" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>


            <div class="form-group mb-3">
                <label for="estado" class="fs-5">Estado:</label>
                <input type="text" class="form-control fs-5" id="estado" name="estado" placeholder="Digite o estado">
            </div>


            <div class="form-group mb-3">
                <label for="telefone" class="fs-5">Telefone:</label>
                <input type="text" class="form-control fs-5" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>


            <div class="form-group mb-3">
                <label for="celular" class="fs-5">Celular:</label>
                <input type="text" class="form-control fs-5" id="celular" name="celular" placeholder="Digite o celular">
            </div>


            <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
        </form>
        <br>
    </div>
</body>
</html>
