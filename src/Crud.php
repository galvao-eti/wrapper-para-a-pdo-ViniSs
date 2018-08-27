<?php
require '../src/Base.php';
class Crud extends Base {
    public function insert($nome) {
        $sql = "INSERT INTO `categoria` (`id`, `nome`) VALUES (NULL, '$nome')";
        $salvar = new Base();
        $salvar->preparar($sql);
        echo "Cadastro Salvo";
        parent::desconectar();
    }
    public function listar() {
        parent::listar();
        parent::desconectar();
    }
}