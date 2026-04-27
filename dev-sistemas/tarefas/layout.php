<?php
/* =============================================
   layout.php
   Framework visual: CSS puro — css/style.css
   Bootstrap NÃO utilizado nesta versão.
   Fonte: Inter via Google Fonts (css/style.css)
   ============================================= */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina . ' — Taskr' : 'Taskr'; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar">
    <span class="navbar-brand">Taskr</span>
    <?php if (isset($_SESSION['usuario_id'])): ?>
    <div class="navbar-right">
        <span class="navbar-user">Ola, <strong><?php echo $_SESSION['usuario']; ?></strong></span>
        <a href="logout.php" class="btn-sair">Sair</a>
    </div>
    <?php endif; ?>
</nav>
