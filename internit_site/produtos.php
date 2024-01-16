<?php
include('header.php');
include_once('config.php');
require_once('style.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Produtos</title>
</head>

<body>
    
    <div class="box-search">
    <a href="produto_cad.php">
        <button type="button" class="btn btn-info">Cadastrar produto</button>
    </a>    
    </div>
    <div class="m-4">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col" class="table-info">Nome</th>
                    <th scope="col" class="table-info">Status</th>
                    <th scope="col" class="table-info">Quantidade</th>
                    <th scope="col" class="table-info">Valor</th>
                    <th scope="col" class="table-info">Categoria</th>
                    <th scope="col" class="table-info">Imagem</th>
                    <th scope="col" class="table-info">Descrição</th>
                    <th scope="col" class="table-info">Código</th>
                    <th scope="col" colspan="2" class="table-info" style="text-align:center">Ações</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                while ($produto = mysqli_fetch_assoc($dataProduto)) {
                    echo "<tr>";


                    echo "<td class='table-dark'>" . $produto['prodnome'] . "</td>";
                    echo "<td class='table-dark'>" . $produto['status'] . "</td>";
                    echo "<td class='table-dark'>" . $produto['quantidade'] . "</td>";
                    echo "<td class='table-dark'>" . $produto['valor'] . "</td>";
                    echo "<td class='table-dark'>" . $produto['catnome'] . "</td>";
                    echo "<td class='table-dark'><img src='" . $produto['imagem'] . "' style='max-width: 100px; max-height: 100px;'></td>";
                    echo "<td class='table-dark'>" . $produto['descricao'] . "</td>";
                    echo "<td class='table-dark'>" . $produto['cod'] . "</td>";

                    echo "<td class='table-dark'  style='text-align:center'>
                        <a href='produto_att.php?cod=$produto[cod]'>
                            <input class='btn btn-primary' type='button' value='Alterar'> 
                        </a> 
                    </td>";
                    echo "<td class='table-dark' style='text-align:center'>
                        <a href='delete.php?cod=$produto[cod]&id=0'>
                            <input class='btn btn-primary' type='button' value='Excluir'>
                        </a>
                    </td>";

                }
                ?>
            </tbody>
        </table>
    </div>


</body>
</html>