<?php
    switch($_GET['id']){
        case 0:
            if(!empty($_GET['cod']))
            {
                include_once('config.php');
        
                $cod = $_GET['cod'];
        
                $sqlSelect = "SELECT * FROM produtos WHERE cod=$cod";
        
                $result = $conexao->query($sqlSelect);
        
                if($result->num_rows > 0)
                {
                    $sqlDelete = "DELETE FROM produtos WHERE cod=$cod";
                    $resultDelete = $conexao->query($sqlDelete);
                }
            }
            header('Location: produtos.php');
            break;
        case 1:
            if(!empty($_GET['cod']))
            {
                include_once('config.php');
        
                $cod = $_GET['cod'];
        
                $sqlSelect = "SELECT * FROM categoria WHERE cod=$cod";
        
                $result = $conexao->query($sqlSelect);
        
                if($result->num_rows > 0)
                {
                    $sqlDelete = "DELETE FROM categoria WHERE cod=$cod";
                    $resultDelete = $conexao->query($sqlDelete);
                }
            }
            header('Location: categorias.php');
            break;
    }
?>