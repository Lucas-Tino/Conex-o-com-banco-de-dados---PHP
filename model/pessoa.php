<?php

// conexão entre este arquivo e o Conexao.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/conexao.php';

// cria a classe Pessoa
class Pessoa{
    // declaração de variáveis privadas para cada atributo da entidade pessoa do banco de dados, mais a conexão
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    // funções get e set para todos os atributos da pessoa: gets servem para retornar os dados atualmente salvos, e sets servem para salvar dados novos no lugar
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCep() {
        return $this->cep;
    }
    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCelular() {
        return $this->celular;
    }
    public function setCelular($celular) {
        $this->celular = $celular;
    }
    // fim dos get e set

    // método construtor
    public function __construct() {
        // a variável conexao tem uma instância de Conexao atribuída a ela
        $this->conexao = new Conexao();
    }

    // função para inserir os dados que temos no banco de dados
    public function inserir() {
        // variável que recebe uma linha de comando insert do sql, inserindo ? em todos os campos
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        // variável que recebe o retorno da função prepare (com a variável sql como parâmetro) da classe conexao
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // executa a função bind_param com uma string com várias letras s (a mesma quantidade de atributos) e as variáveis de dados. acredito que essa função sirva para substituir os pontos de interrogação no comando sql pelos valores nas variáveis
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        // o retorno da função inserir é o retorno da função execute do stmt
        return $stmt->execute();
    }

    // função similar à anterior, mas para listar os registros na tabela pessoa
    public function listar() {
        // variável que recebe uma linha de comando select do sql
        $sql = "SELECT * FROM pessoa";
        // variável que recebe o retorno da função prepare (com a variável sql como parâmetro) da classe conexao
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // executa a função execute do stmt
        $stmt->execute();
        // variável result de recebe o resultado do stmt
        $result = $stmt->get_result();
        // criação uma array pessoas para armazenar os registros
        $pessoas = [];
        // laço de repetição enquando pessoas for igual ao retorno da função fetch_assoc do result (os próprios registros que foram obtidos com o select)
        while($pessoa = $result->fetch_assoc()) {
            // insere a variável pessoa em um dos índices da array pessoas
            $pessoas[] = $pessoa;
        }
        // retorna a array pessoas
        return $pessoas;
    }

    // função similar à anterior, só que busca um único registro ao invés de todos, e busca o mesmo pelo seu id.
    public function buscarPorId($id){
        $sql = "SELECT * FROM pessoa WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // função similar à inserir, mas que altera dados de um registro já existente ao invés de criar um novo
    public function atualizar($id){
        $sql = "UPDATE pessoa SET nome = ?, endereco = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, telefone = ?, celular = ? WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssssi',  $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular, $id);
        return $stmt->execute();
    }

    // última função, que irá excluir um registro com base no id
    public function excluir($id) {
        $sql = "DELETE FROM pessoa WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}

?>