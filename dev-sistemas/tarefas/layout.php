<?php
/* =============================================
   layout.php
   Framework: Bootstrap 5
   CDN: https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
   ============================================= */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina . ' — Taskr' : 'Taskr'; ?></title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Google Fonts: Inter -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }

        /* Navbar */
        .navbar { background-color: #1a1a2e !important; padding: 14px 0; box-shadow: 0 2px 8px rgba(0,0,0,0.2); }
        .navbar-brand { font-size: 1rem; font-weight: 800; letter-spacing: 0.12em; color: #fff !important; }
        .navbar-text  { font-size: 0.82rem; color: #83829b !important; }
        .navbar-text strong { color: #fff; }
        .btn-sair {
            font-size: 0.72rem; font-weight: 700; letter-spacing: 0.08em;
            color: #83829b; border: 1px solid rgba(255,255,255,0.2);
            padding: 4px 14px; border-radius: 4px; text-decoration: none;
            transition: color 0.2s, border-color 0.2s;
        }
        .btn-sair:hover { color: #fff; border-color: rgba(255,255,255,0.5); }

        /* Cards */
        .card { border: 1px solid #e2e0e4; border-radius: 10px; box-shadow: 0 4px 12px rgba(26,26,46,0.05); }
        .card-header { background-color: #fff; border-bottom: 1px solid #f0eef2; padding: 18px 24px; }
        .card-header h2 { font-size: 1.05rem; font-weight: 700; color: #1a1a2e; margin: 0; }

        /* Tabela */
        .table thead th {
            background-color: #1a1a2e; color: #fff;
            font-size: 0.7rem; font-weight: 700;
            letter-spacing: 0.1em; text-transform: uppercase;
            border: none; padding: 14px 20px;
        }
        .table tbody td { padding: 13px 20px; vertical-align: middle; font-size: 0.875rem; }
        .table tbody tr:hover { background-color: #fafafa; }

        /* Badges de status */
        .badge-pendente  { background-color: #fff3cd; color: #856404; font-size: 0.68rem; font-weight: 700; letter-spacing: 0.06em; padding: 4px 12px; border-radius: 20px; }
        .badge-concluida { background-color: #d1fae5; color: #065f46; font-size: 0.68rem; font-weight: 700; letter-spacing: 0.06em; padding: 4px 12px; border-radius: 20px; }

        /* Botões de ação na tabela */
        .btn-acao { font-size: 0.68rem; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; padding: 4px 12px; border-radius: 20px; text-decoration: none; border: none; transition: opacity 0.2s; }
        .btn-acao:hover { opacity: 0.75; }
        .btn-editar   { background-color: #e5e1e3; color: #47464c; }
        .btn-concluir { background-color: #d1fae5; color: #065f46; }
        .btn-excluir  { background-color: #ffdad6; color: #93000a; }

        /* Botão principal */
        .btn-taskr {
            background-color: #1a1a2e; color: #fff;
            font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
            border: none; border-radius: 6px; padding: 10px 22px;
            text-decoration: none; transition: opacity 0.2s;
            box-shadow: 0 2px 6px rgba(26,26,46,0.2);
        }
        .btn-taskr:hover { opacity: 0.85; color: #fff; }

        /* Botão cancelar */
        .btn-cancelar {
            background-color: transparent; color: #47464c;
            font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
            border: 1.5px solid #c8c5cd; border-radius: 6px; padding: 10px 22px;
            text-decoration: none; transition: background-color 0.2s;
        }
        .btn-cancelar:hover { background-color: #f0eef2; color: #1a1a2e; }

        /* Formulários */
        .form-label { font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: #47464c; }
        .form-control, .form-select {
            border: 1.5px solid #c8c5cd; border-radius: 4px;
            font-size: 0.9rem; padding: 10px 14px;
        }
        .form-control:focus, .form-select:focus { border-color: #1a1a2e; box-shadow: none; }

        /* Rodapé da tabela */
        .table-footer { background-color: #fafafa; border-top: 1px solid #ebe7e9; padding: 10px 20px; font-size: 0.78rem; color: #78767d; }

        /* Estado vazio */
        .empty-state { text-align: center; padding: 56px 20px; color: #78767d; }
        .empty-state p { font-size: 0.85rem; margin-top: 6px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand">TASKR</span>
        <?php if (isset($_SESSION['usuario_id'])): ?>
        <div class="d-flex align-items-center gap-3">
            <span class="navbar-text">Ola, <strong><?php echo $_SESSION['usuario']; ?></strong></span>
            <a href="logout.php" class="btn-sair">Sair</a>
        </div>
        <?php endif; ?>
    </div>
</nav>
