<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imgs/favicon.png">
    <title>Minhas Férias</title>
</head>
<body>

    <form id="form-login" method="POST">
        <div id="login">                    

                <h2 class="login-texto">Usuário</h2>
                <input type="text" name="usuario" placeholder="E-mail ou Número" required>
                <br>
                <h2 class="login-texto">Senha</h2>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
                <br>
                <br>
                <!-- Botão de envio -->
                <button type="submit" class="sessao-login-btn">Entrar</button>

                <!-- Exibir erro, se existir -->
                <?php if (!empty($error)): ?>
                    <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>

                </div>
    </form>
  </div>
</body>
</html>
