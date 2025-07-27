<h1>Listar Tarefas</h1>

<?php
$sql = "SELECT t.*, u.nome AS usuario_nome FROM tarefas t 
        INNER JOIN usuarios u ON t.usuario_id = u.id ORDER BY t.data_criacao DESC";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-bordered table-hover'>";
    echo "<tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Data Criação</th>
            <th>Ações</th>
          </tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>{$row->id}</td>";
        echo "<td>{$row->usuario_nome}</td>";
        echo "<td>{$row->descricao}</td>";
        echo "<td>{$row->status}</td>";
        echo "<td>{$row->data_criacao}</td>";
        echo "<td>
                <button onclick=\"location.href='?page=editar_tarefa&id={$row->id}'\" class='btn btn-success btn-sm'>Editar</button>
                <button onclick=\"if(confirm('Excluir tarefa?')) location.href='?page=salvar_tarefa&acao=excluir&id={$row->id}'\" class='btn btn-danger btn-sm'>Excluir</button>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-warning'>Nenhuma tarefa cadastrada.</p>";
}
?>
