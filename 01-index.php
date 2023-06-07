<?php
    // Inclui o arquivo de conexão com o banco de dados
    include("00-conexao.php");

    // Condição para fazer as verificações de usuários no banco de dados
    if (isset($_POST['email']) || ($_POST['senha'])) {
        
        if (strlen($_POST['email']) == 0) {
            print "Preencha o campo <strong>E-mail</strong>!";
        } elseif (strlen($_POST['senha']) == 0) {
            print "Preencha o campo <strong>Senha</strong>!";
        } else {

            $email = $conexao->real_escape_string($_POST['email']);
            $senha = $conexao->real_escape_string($_POST['senha']);

            $consulta_select = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $consulta_sql = $conexao->query($consulta_select) or die("Falha na conexão do código SQL" . $conexao->error);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <h1>Acesse sua conta</h1>
        <p>
            <label for="">E-mail</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>