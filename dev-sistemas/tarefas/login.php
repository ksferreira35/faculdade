<?php
/* =============================================
   login.php
   Framework visual: CSS puro — css/style.css
   ============================================= */
    session_start();
    include 'conexao.php';

    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'] ?? '';
        $senha   = isset($_POST['senha']) ? md5($_POST['senha']) : '';

        $sql  = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha',   $senha);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $dados = $stmt->fetch(PDO::FETCH_OBJ);
            $_SESSION['usuario_id'] = $dados->id;
            $_SESSION['usuario']    = $dados->usuario;
            header('Location: index.php');
            exit;
        } else {
            $erro = 'Usuario ou senha incorretos. Tente novamente.';
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Taskr</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-page">

<div class="login-bg-glow"></div>

<div class="login-card">

    <div class="login-brand">TASKR</div>
    <div class="login-subtitle">Sistema de gerenciamento de tarefas</div>

    <?php if ($erro != ''): ?>
    <div class="alert-error"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form action="login.php" method="post">

        <div class="form-group">
            <label class="form-label" for="usuario">USUARIO</label>
            <input
                class="form-control"
                type="text"
                id="usuario"
                name="usuario"
                placeholder="Insira seu usuario"
                required>
        </div>

        <div class="form-group">
            <label class="form-label" for="senha">SENHA</label>
            <input
                class="form-control"
                type="password"
                id="senha"
                name="senha"
                placeholder="••••••••"
                required>
        </div>

        <button type="submit" class="btn-primary" style="width:100%; justify-content:center; margin-top:8px;">
            ENTRAR
        </button>

    </form>

</div>

</body>
</html>
