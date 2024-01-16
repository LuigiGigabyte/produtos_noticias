<?php
    include_once('config.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')";
        $conexao->query($sql);
        header('Location:dashboard.php');
    }
?>
