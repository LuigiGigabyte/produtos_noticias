<?php
include_once('config.php');
switch($_GET['id']){
    case 0:
        $nome = $_POST['nome'];
        $status = $_POST['status'];
        $valor = intval($_POST['valor']);
        $descricao = $_POST['descricao'];
        $img = $_POST['imagem'];
        $qtd = intval($_POST['quantidade']);
        $cat = intval($_POST['categoria']);
        $sqlInsertProd = "INSERT INTO produtos 
        (nome,status,valor,descricao,imagem,quantidade,categoria) 
        VALUES 
        ('$nome','$status','$valor','$descricao','$img','$qtd','$cat')";
        $conexao->query($sqlInsertProd);
        header('Location:produtos.php');  
        break;
    case 1:
        $nome = $_POST['nome'];
        $sqlInsertCat = "INSERT INTO categoria
        (nome)
        VALUES
        ('$nome')";
        $conexao->query($sqlInsertCat);
        header('Location:categorias.php');
        break;

}

?>