<?php 
    // Variáveis que armazena os valores de conexão
    
    $banco_de_dados = "test";
    $host = "localhost";
    $usuario = "root";
    $senha = "";

    $conexao = new mysqli($host,$usuario, $senha, $banco_de_dados);

    if ($conexao->error) {
        die("Falha ao conectar no banco de dados " . $conexao->error);
    }
?>