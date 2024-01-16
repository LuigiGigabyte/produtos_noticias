<?php
include('header.php');
include_once('config.php');
require_once('style.php');
if (!isset($_SESSION['admin_user'])) {
    header("Location: login_admin.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Administrar Notícias</title>
</head>

<body>

    <div class="m-4">
        <h2>Administrar Notícias</h2>

        <a href="noticia_cad.php" class="btn btn-primary">Incluir Nova Notícia</a>

        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col" class="table-info">ID</th>
                    <th scope="col" class="table-info">Título</th>
                    <th scope="col" class="table-info">Data</th>
                    <th scope="col" class="table-info">Imagem</th>
                    <th scope="col" class="table-info">Resumo</th>
                    <th scope="col" class="table-info">Saiba mais</th>
                    <th scope="col" class="table-info">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($noticia = mysqli_fetch_assoc($dataTodasNoticias)) {
                    echo "<tr>";
                    echo "<td class='table-dark'></td>";
                    echo "<td class='table-dark'>" . $noticia['titulo'] . "</td>";
                    echo "<td class='table-dark'>" . $noticia['data'] . "</td>";
                    echo "<td class='table-dark'><img src='" . $noticia['imagem'] . "' style='max-width: 100px; max-height: 100px;'></td>";
                    echo "<td class='table-dark'>" . $noticia['resumo'] . "</td>";
                    echo "<td class='table-dark'><a href='noticia_detalhes.php?id='>Saiba mais</a></td>";
                    echo "<td class='table-dark'>
                    <a href='' class='btn btn-primary'>Alterar</a>
                    <a href='' class='btn btn-danger'>Excluir</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
