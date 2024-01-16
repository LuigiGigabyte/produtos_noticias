<?php
include_once('config.php');
include('header.php');
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
    <title>Categorias</title>
</head>

<body>
    
    <div class="box-search">
    <a href="categoria_cad.php">
        <button type="button" class="btn btn-info">Cadastrar categoria</button>
    </a>    
    </div>
    <div class="m-4">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col" class="table-info">Nome</th>
                    <th scope="col" class="table-info">Código</th>
                    <th scope="col" colspan="2" class="table-info" style="text-align:center">Ações</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                while ($categoria = mysqli_fetch_assoc($dataCat)) {
                    echo "<tr>";


                    echo "<td class='table-dark'>" . $categoria['nome'] . "</td>";
                    echo "<td class='table-dark'>" . $categoria['cod'] . "</td>";

                    echo "<td class='table-dark'  style='text-align:center'>
                        <a href='categoria_att.php?cod=$categoria[cod]'>
                            <input class='btn btn-primary' type='button' value='Alterar'> 
                        </a> 
                    </td>";
                    echo "<td class='table-dark' style='text-align:center'>
                        <a href='delete.php?cod=$categoria[cod]&id=1'>
                            <input class='btn btn-primary' type='button' value='Excluir'>
                        </a>
                    </td>";

                }
                ?>
            </tbody>
        </table>
    </div>


</body>
<script>
</script>

</html>