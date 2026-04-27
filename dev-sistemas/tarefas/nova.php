<?php
/* =============================================
   nova.php
   Framework visual: CSS puro — css/style.css
   ============================================= */
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }

    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo     = $_POST['titulo']    ?? '';
        $descricao  = $_POST['descricao'] ?? '';
        $usuario_id = $_SESSION['usuario_id'];

        $stmt = $pdo->prepare("INSERT INTO tarefas (titulo, descricao, usuario_id) VALUES (?, ?, ?)");
        $stmt->execute([$titulo, $descricao, $usuario_id]);

        header('Location: index.php');
        exit;
    }

    $titulo_pagina = 'Nova Tarefa';
    include 'layout.php';
?>

<div class="container-narrow">

    <div class="card">

        <div class="card-header">
            <h2>Nova Tarefa</h2>
        </div>

        <div class="card-body">

            <form action="nova.php" method="post">

                <div class="form-group">
                    <label class="form-label" for="titulo">
                        Titulo <span style="color:#ba1a1a">*</span>
                    </label>
                    <input
                        class="form-control"
                        type="text"
                        id="titulo"
                        name="titulo"
                        placeholder="Digite o nome da tarefa..."
                        required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="descricao">Descricao</label>
                    <textarea
                        class="form-control"
                        id="descricao"
                        name="descricao"
                        rows="4"
                        placeholder="Descreva os detalhes desta tarefa..."></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">SALVAR</button>
                    <a href="index.php" class="btn-secondary">CANCELAR</a>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
