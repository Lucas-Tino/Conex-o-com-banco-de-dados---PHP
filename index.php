<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <br>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço">
            </div>
            <br>

            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro">
            </div>
            <br>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o cep">
            </div>
            <br>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade">
            </div>
            <br>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" placeholder="Digite o estado">
            </div>
            <br>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
            <br>

            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Digite o celular">
            </div>
            <br>

            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
        <br>
    </div>
</body>
</html>