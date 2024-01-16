<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Início</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="produtos.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorias.php">Categorias</a>
                </li>
                <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true ){
                    echo '<li class="nav-item">
                            <a class="nav-link" href="noticias.php">Notícias</a>
                        </li>';
                }
                if(isset($_SESSION['admin_user']) && $_SESSION['admin_user'] === true){
                    echo '<li class="nav-item">
                            <a class="nav-link" href="noticias_admin.php">Admin</a>
                        </li>';
                }
                ?>
            </ul>
        </div>
        <?php
            if ($_SESSION['logged_in'] !== true) {
                echo "
                <div class='d-flex'>
                    <a class='btn btn-outline-light me-2' href='login.php'>Login</a>
                </div>";
            }else{
                $email = $_SESSION['email'];
                echo "
                <div class='d-flex'>
                    <span class='text-light me-2'>Olá, " .$email. "</span>
                    <a class='btn btn-outline-light me-2' href='logout.php'>Logout</a>
                </div>";
            }
        ?>
    </div>
</nav>
