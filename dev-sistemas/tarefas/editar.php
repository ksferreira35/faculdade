<?php
/* =============================================
   editar.php
   Framework visual: CSS puro — css/style.css
   ============================================= */
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit;
    }

    include 'conexao.php';

    $id         = $_GET['id'] ?? '';
    $usuario_id = $_SESSION['usuario_id'];

    // Buscar a tarefa no banco
    $sql  = "SELECT * FROM tarefas WHERE id = :id AND usuario_id = :usuario_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id',         $id);
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->execute();
    $tarefa = $stmt->fetch(PDO::FETCH_OBJ);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo    = $_POST['titulo']    ?? '';
        $descricao = $_POST['descricao'] ?? '';
        $status    = $_POST['status']    ?? 'pendente';

        $sql  = "UPDATE tarefas SET titulo = :titulo, descricao = :descricao, status = :status
                 WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo',     $titulo);
        $stmt->bindParam(':descricao',  $descricao);
        $stmt->bindParam(':status',     $status);
        $stmt->bindParam(':id',         $id);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->execute();

        header('Location: index.php');
        exit;
    }

    $titulo_pagina = 'Editar Tarefa';
    include 'layout.php';
?>

<div class="container-narrow">

    <div class="card">

        <div class="card-header">
            <h2>Editar Tarefa</h2>
        </div>

        <div class="card-body">

            <form action="editar.php?id=<?php echo $tarefa->id; ?>" method="post">

                <div class="form-group">
                    <label class="form-label" for="titulo">
                        Titulo <span style="color:#ba1a1a">*</span>
                    </label>
                    <input
                        class="form-control"
                        type="text"
                        id="titulo"
                        name="titulo"
                        value="<?php echo $tarefa->titulo; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="descricao">Descricao</label>
                    <textarea
                        class="form-control"
                        id="descricao"
                        name="descricao"
                        rows="4"><?php echo $tarefa->descricao; ?></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="pendente"  <?php echo ($tarefa->status == 'pendente')  ? 'selected' : ''; ?>>Pendente</option>
                        <option value="concluida" <?php echo ($tarefa->status == 'concluida') ? 'selected' : ''; ?>>Concluida</option>
                    </select>
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
