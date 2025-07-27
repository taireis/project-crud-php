<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            $res = $conn->query($sql);
            if ($res==true){
                print "<script>alert('Cadastro com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Cadastro NÃO realizado!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':
            if (!isset($_REQUEST["id"]) || empty($_REQUEST["id"])) {
                die("Erro: id não informado para edição.");
             }
    $id = (int)$_REQUEST["id"];

             $nome = $_POST["nome"];
             $email = $_POST["email"];
             $senha = $_POST["senha"];
             $data_nasc = $_POST["data_nasc"];

             $sql = "UPDATE usuarios SET 
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_nasc='{$data_nasc}'
            WHERE id = $id";

            $res = $conn->query($sql);
            if ($res==true){
                 print "<script>alert('Editado com sucesso!');</script>";
                 print "<script>location.href='?page=listar';</script>";
             }else{
                  print "<script>alert('Edição NÃO realizada!');</script>";
                  print "<script>location.href='?page=listar';</script>";
            }
            break;


        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);
            if ($res==true){
                 print "<script>alert('Excluido com sucesso!');</script>";
                 print "<script>location.href='?page=listar';</script>";
             }else{
                  print "<script>alert('Exclusão NÃO realizada!');</script>";
                  print "<script>location.href='?page=listar';</script>";
            }
            break;
    }
    ?>