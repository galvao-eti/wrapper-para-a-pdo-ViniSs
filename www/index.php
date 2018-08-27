<?php
//require './Base.php';
require '../src/Crud.php';
?>
<h1>Trabalho PHP OO</h1>

<a href="index.php">Home</a>

<h2>Cadastrar Categoria</h2>
<form method="get" action="#">
    <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];} else {echo 0;}?>"
           
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Digite o nome" value="<?php if (isset($_GET['nome'])) {echo $_GET['nome'];}?>"/>
    <br>
    <br>
    <input name="cadastrar" type="submit" value="Salvar"/>
</form>

<h2>Listar Categorias</h2>
<button type="button"><a href="index.php?listar">Listar</a></button>

<?php

$categoria = new Crud();

if (isset($_GET['cadastrar']) and ( $_GET['id'] == 0)) {
    $nome = $_GET['nome'];
    $categoria->insert($nome);
}

if (isset($_GET['listar'])) {
    $categoria->listar();
}

