<?php
/* =============================================
   nova.php
   Framework: Bootstrap 5
   CDN: https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
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

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card">
                <div class="card-header">
                    <h2>Nova Tarefa</h2>
                </div>
                <div class="card-body p-4">

                    <form action="nova.php" method="post">

                        <div class="mb-3">
                            <label class="form-label" for="titulo">
                                Titulo <span style="color:#ba1a1a">*</span>
                            </label>
                            <input class="form-control" type="text" id="titulo" name="titulo"
                                   placeholder="Digite o nome da tarefa..." required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="descricao">Descricao</label>
                            <textarea class="form-control" id="descricao" name="descricao"
                                      rows="4" placeholder="Descreva os detalhes desta tarefa..."></textarea>
                        </div>

                        <div class="d-flex flex-row-reverse gap-2">
                            <button type="submit" class="btn-taskr">SALVAR</button>
                            <a href="index.php" class="btn-cancelar">CANCELAR</a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
