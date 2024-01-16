<?php
require_once('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email == 'admin@gmail.com' && $password == '12345') {
        $_SESSION['admin_user'] = true;
        header("Location: noticias_admin.php");
    }
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["senha"])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
        } else {
            echo $error_message = "Senha incorreta";
        }
    } else {
        echo $error_message = "Usuário não encontrado";
    }
}
?>
