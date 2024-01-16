<?php
include_once('config.php');

switch($_GET['id']){
    case 0:
        $nome = $_POST['nome'];
        $status = $_POST['status'];
        $valor = intval($_POST['valor']);
        $descricao = $_POST['descricao'];
        $cod = $_GET['cod'];
        $img = $_POST['imagem'];
        $qtd = intval($_POST['quantidade']);
        $cat = intval($_POST['categoria']);
        $sql = "SELECT *  FROM produtos WHERE cod=$cod";
        $result = $conexao->query($sql);


        $updateProd = "UPDATE produtos SET nome = '$nome', valor = '$valor', quantidade = '$qtd',
        descricao = '$descricao', imagem = '$img', status = '$status', categoria = '$cat'  WHERE cod=$cod";
        $conexao->query($updateProd);
        header('Location:produtos.php');
        break;
    case 1:
        $nome = $_POST['nome'];
        $cod = $_GET['cod'];
        $updateCat = "UPDATE categoria SET nome = '$nome' WHERE cod=$cod";
        $conexao->query($updateCat);
        header('Location:categorias.php');
        break;
}