<h1>Nova Tarefa</h1>

<form action="?page=salvar_tarefa" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Usuário</label>
        <select name="usuario_id" class="form-control" required>
            <option value="">Selecione</option>
            <?php
                $sql = "SELECT id, nome FROM usuarios";
                $res = $conn->query($sql);
                while ($user = $res->fetch_object()) {
                    echo "<option value='{$user->id}'>{$user->nome}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pendente" selected>Pendente</option>
            <option value="concluida">Concluída</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
