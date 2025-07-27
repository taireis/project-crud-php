<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $usuario_id = $_POST['usuario_id'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];

        $sql = "INSERT INTO tarefas (usuario_id, descricao, status) VALUES ('{$usuario_id}', '{$descricao}', '{$status}')";
        $res = $conn->query($sql);

        if ($res) {
            echo "<script>alert('Tarefa cadastrada com sucesso!'); location.href='?page=listar_tarefas';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar tarefa!'); location.href='?page=listar_tarefas';</script>";
        }
        break;

    case 'editar':
        $id = (int)$_POST['id'];
        $usuario_id = $_POST['usuario_id'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];

        $sql = "UPDATE tarefas SET usuario_id='{$usuario_id}', descricao='{$descricao}', status='{$status}' WHERE id={$id}";
        $res = $conn->query($sql);

        if ($res) {
            echo "<script>alert('Tarefa editada com sucesso!'); location.href='?page=listar_tarefas';</script>";
        } else {
            echo "<script>alert('Erro ao editar tarefa!'); location.href='?page=listar_tarefas';</script>";
        }
        break;

    case 'excluir':
        $id = (int)$_REQUEST['id'];
        $sql = "DELETE FROM tarefas WHERE id={$id}";
        $res = $conn->query($sql);

        if ($res) {
            echo "<script>alert('Tarefa excluída com sucesso!'); location.href='?page=listar_tarefas';</script>";
        } else {
            echo "<script>alert('Erro ao excluir tarefa!'); location.href='?page=listar_tarefas';</script>";
        }
        break;
}
?>
