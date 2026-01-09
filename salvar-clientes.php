<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $sql = "INSERT INTO clientes (nome, email, senha, cpf ) VALUES ('$nome', '$email', '$senha', '$cpf')";

        $res = $conn->query($sql);

        if ($res) {
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=listar-clientes';</script>";
        } else {
            print "<script>alert('Não cadastrou');</script>";
            print "<script>location.href='?page=listar-clientes';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

        $id = $_REQUEST['id_cliente'];
        $sql = "UPDATE clientes SET nome='$nome', email='$email', senha='$senha', cpf='$cpf' WHERE id_cliente='$id'";
        $res = $conn->query($sql);

        if ($res) {
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=listar-clientes';</script>";
        } else {
            print "<script>alert('Não cadastrou');</script>";
            print "<script>location.href='?page=listar-clientes';</script>";
        }
        break;
    case 'excluir':
        $id = $_REQUEST['id_usuario'];
        $sql = "DELETE FROM clientes WHERE id_cliente='$id'";

        $res = $conn->query($sql);
        if ($res) {
            print "<script>alert('Excluiu com sucesso');</script>";
            print "<script>location.href='?page=listar-clientes';</script>";
        } else {
            print "<script>alert('Não cadastrou');</script>";
            print "<script>location.href='?page=listar-clientes';</script>";
        }
        break;
}
