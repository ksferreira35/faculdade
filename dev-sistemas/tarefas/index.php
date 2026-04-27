<?php
/* =============================================
   index.php
   Framework: Bootstrap 5
   CDN: https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
   ============================================= */
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }

    include 'conexao.php';

    $usuario_id = $_SESSION['usuario_id'];

    $sql  = "SELECT * FROM tarefas WHERE usuario_id = :usuario_id ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->execute();
    $tarefas = $stmt->fetchAll(PDO::FETCH_OBJ);
    $total   = count($tarefas);

    $titulo_pagina = 'Minhas Tarefas';
    include 'layout.php';
?>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fs-4 fw-bold mb-0" style="color:#1a1a2e;">Minhas Tarefas</h1>
        <a href="nova.php" class="btn-taskr">+ Nova Tarefa</a>
    </div>

    <div class="card">
        <div class="table-wrapper">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Status</th>
                        <th>Data de Criacao</th>
                        <th class="text-end">Acoes</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if ($total == 0): ?>
                    <tr>
                        <td colspan="4">
                            <div class="empty-state">
                                <strong>Nenhuma tarefa encontrada</strong>
                                <p>Clique em "+ Nova Tarefa" para comecar.</p>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php foreach ($tarefas as $tarefa): ?>
                    <tr>
                        <td class="fw-semibold"><?php echo $tarefa->titulo; ?></td>
                        <td>
                            <?php if ($tarefa->status == 'concluida'): ?>
                                <span class="badge-concluida">Concluida</span>
                            <?php else: ?>
                                <span class="badge-pendente">Pendente</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo date('d/m/Y H:i', strtotime($tarefa->criado_em)); ?></td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="editar.php?id=<?php echo $tarefa->id; ?>"
                                   class="btn-acao btn-editar">Editar</a>

                                <a href="concluir.php?id=<?php echo $tarefa->id; ?>"
                                   class="btn-acao btn-concluir">Concluir</a>

                                <a href="excluir.php?id=<?php echo $tarefa->id; ?>"
                                   class="btn-acao btn-excluir"
                                   onclick="return confirm('Deseja excluir esta tarefa?')">Excluir</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div class="table-footer">
            <?php echo $total; ?> tarefa(s) encontrada(s)
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
