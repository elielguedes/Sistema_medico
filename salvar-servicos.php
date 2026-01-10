<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $duracao_min = $_POST['duracao_min'];
        $sql = "INSERT INTO servicos (nome, preco, descricao, duracao_min) VALUES ('$nome', '$preco', '$descricao', '$duracao_min')";

        $res = $conn->query($sql);

        if ($res) {
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=listar-servicos';</script>";
        } else {
            print "<script>alert('Não cadastrou');</script>";
            print "<script>location.href='?page=listar-servicos';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $duracao_min = $_POST['duracao_min'];

        $id = $_REQUEST['id_servico'];
        $sql = "UPDATE servicos SET nome='$nome', preco='$preco', descricao='$descricao', duracao_min='$duracao_min' WHERE id_servico='$id'";
        $res = $conn->query($sql);

        if ($res) {
            print "<script>alert('Editou com sucesso');</script>";
            print "<script>location.href='?page=listar-servicos';</script>";
        } else {
            print "<script>alert('Não editou');</script>";
            print "<script>location.href='?page=listar-servicos';</script>";
        }
        break;
    case 'excluir':
        $id = $_REQUEST['id_servico'];
        $sql = "DELETE FROM servicos WHERE id_servico='$id'";

        $res = $conn->query($sql);
        if ($res) {
            print "<script>alert('Excluiu com sucesso');</script>";
            print "<script>location.href='?page=listar-servicos';</script>";
        } else {
            print "<script>alert('Não excluido');</script>";
            print "<script>location.href='?page=listar-servicos';</script>";
        }
        break;
}

