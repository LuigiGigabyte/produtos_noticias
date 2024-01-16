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
    <title>Todas as Notícias</title>
</head>

<body>

    <div class="m-4">
        <h2>Todas as Notícias</h2>
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col" class="table-info">Título</th>
                    <th scope="col" class="table-info">Data</th>
                    <th scope="col" class="table-info">Imagem</th>
                    <th scope="col" class="table-info">Resumo</th>
                    <th scope="col" class="table-info">Saiba mais</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($noticia = mysqli_fetch_assoc($dataTodasNoticias)) {
                    echo "<tr>";
                    echo "<td class='table-dark'>" . $noticia['titulo'] . "</td>";
                    echo "<td class='table-dark'>" . $noticia['data'] . "</td>";
                    echo "<td class='table-dark'><img src='" . $noticia['imagem'] . "' style='max-width: 100px; max-height: 100px;'></td>";
                    echo "<td class='table-dark'>" . $noticia['resumo'] . "</td>";
                    echo "<td class='table-dark'><a href=''>Saiba mais</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
