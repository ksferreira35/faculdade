<?php
/* =============================================
   login.php
   Framework: Bootstrap 5
   CDN: https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
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

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Google Fonts: Inter -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a1a2e;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }
        .login-card {
            background: #fff;
            border-radius: 10px;
            border: 1.5px solid #c8c5cd;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 44px 40px;
            width: 100%;
            max-width: 420px;
        }
        .login-brand {
            font-size: 1.3rem; font-weight: 800;
            letter-spacing: 0.15em; text-transform: uppercase;
            color: #1a1a2e; margin-bottom: 4px;
        }
        .login-subtitle { font-size: 0.82rem; color: #586377; margin-bottom: 32px; }
        .form-label { font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: #47464c; }
        .form-control {
            border: 1.5px solid #c8c5cd; border-radius: 4px;
            font-size: 0.9rem; padding: 10px 14px; font-family: 'Inter', sans-serif;
        }
        .form-control:focus { border-color: #1a1a2e; box-shadow: none; }
        .btn-entrar {
            background-color: #1a1a2e; color: #fff; width: 100%;
            font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
            border: none; border-radius: 6px; padding: 12px;
            margin-top: 8px; transition: opacity 0.2s;
        }
        .btn-entrar:hover { opacity: 0.85; color: #fff; }
        .alert-erro {
            background-color: #ffdad6; border: 1px solid #f5c6cb;
            color: #93000a; border-radius: 6px;
            padding: 10px 16px; font-size: 0.82rem; margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="login-card">

    <div class="login-brand">TASKR</div>
    <div class="login-subtitle">Sistema de gerenciamento de tarefas</div>

    <?php if ($erro != ''): ?>
    <div class="alert-erro"><?php echo $erro; ?></div>
    <?php endif; ?>

    <form action="login.php" method="post">

        <div class="mb-3">
            <label class="form-label" for="usuario">Usuario</label>
            <input class="form-control" type="text" id="usuario" name="usuario"
                   placeholder="Insira seu usuario" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="senha">Senha</label>
            <input class="form-control" type="password" id="senha" name="senha"
                   placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn-entrar">ENTRAR</button>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
