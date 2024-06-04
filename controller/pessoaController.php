<?php

// conexão entre este arquivo e o pessoa.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/model/pessoa.php';

// criação da classe PessoaController
class PessoaController {
    // variável de instância pessoa; terá os atributos inseridos pelo usuário atribuídos a ela
    private $pessoa;

    // método construtor
    public function __construct() {
        // atribuição de um objeto da classe Pessoa à variável pessoa
        $this->pessoa = new Pessoa();
        // condicional para executar a função inserir desta classe caso a variável GET acao seja igual a inserir
        if($_GET['acao'] == 'inserir') {
            $this->inserir();
        }
    }

    // função para inserir nos atributos da variável pessoa, os dados que o usuário preencheu na página de cadastro
    public function inserir() {
        // para cada atributo, utiliza a função set correspondente com a variável POST de cada campo do index
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        // executa o função inserir *da classe pessoa*, não do pessoaController
        $this->pessoa->inserir();
    }

    // função para retornar outro função, este sendo o listar da classe pessoa
    public function listar(){
        return $this->pessoa->listar();
    }
}

// executa essa classe após sua construção
new PessoaController();

?>