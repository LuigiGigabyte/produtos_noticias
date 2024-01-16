<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'internit_db';
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    $sqlDashboard = "SELECT nome, valor, quantidade, imagem FROM produtos WHERE status='ativo'";
    $dataDashboard = $conexao->query($sqlDashboard);
    $sqlCat = "SELECT * FROM categoria";
    $dataCat = $conexao->query($sqlCat);
    $sqlProd = "SELECT p.nome AS prodnome, p.*, c.nome AS catnome FROM produtos p LEFT JOIN categoria c ON p.categoria = c.cod";
    $dataProduto = $conexao->query($sqlProd);
    $sqlNoticias = "SELECT * FROM noticias ORDER BY data DESC LIMIT 3";
    $dataNoticias = $conexao->query($sqlNoticias);
    $sqlTodasNoticias = "SELECT * FROM noticias";
    $dataTodasNoticias = $conexao->query($sqlTodasNoticias);
?>