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
        // condicional para executar a função inserir desta classe caso a variável GET acao seja igual a inserir, ou a função atualizar caso ela seja igual a atualizar
        if($_GET['acao'] == 'inserir') {
            $this->inserir();
        } else if($_GET['acao'] == 'atualizar') {
            $this->atualizar($_GET['id']);
        } else if($_GET['acao'] == 'excluir') {
            $this->excluir($_GET['id']);
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

    // função para retornar outra função, este sendo o listar da classe pessoa
    public function listar(){
        return $this->pessoa->listar();
    }

    // função para executar outra função com o parâmetro id, esta sendo a buscaPorId de pessoa
    public function buscarPorId($id){
        return $this->pessoa->buscarPorId($id);
    }

    // muda os atributos de pessoa e no final executa afunção atualizar para inserir os novos valores no banco de dados
    public function atualizar($id){
        $this->pessoa->setId($id);
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        $this->pessoa->atualizar($id);
    }

    public function excluir($id) {
        $this->pessoa->excluir($id);
    }
}

// executa essa classe após sua construção
new PessoaController();

?>