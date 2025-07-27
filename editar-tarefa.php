<?php
$id = (int)$_REQUEST['id'];
$sql = "SELECT * FROM tarefas WHERE id = {$id}";
$res = $conn->query($sql);
$tarefa = $res->fetch_object();
?>

<h1>Editar Tarefa</h1>

<form action="?page=salvar_tarefa" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $tarefa->id; ?>">

    <div class="mb-3">
        <label>Usuário</label>
        <select name="usuario_id" class="form-control" required>
            <?php
            $sql = "SELECT id, nome FROM usuarios";
            $res = $conn->query($sql);
            while ($user = $res->fetch_object()) {
                $selected = ($user->id == $tarefa->usuario_id) ? "selected" : "";
                echo "<option value='{$user->id}' {$selected}>{$user->nome}</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" value="<?php echo $tarefa->descricao; ?>" required>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pendente" <?php if($tarefa->status == 'pendente') echo 'selected'; ?>>Pendente</option>
            <option value="concluida" <?php if($tarefa->status == 'concluida') echo 'selected'; ?>>Concluída</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
