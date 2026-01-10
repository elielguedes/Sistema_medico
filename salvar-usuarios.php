<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')";

        $res = $conn->query($sql);

        if ($res) {
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=listar-usuarios';</script>";
        } else {
            print "<script>alert('Não cadastrou');</script>";
            print "<script>location.href='?page=listar-usuarios';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        $id = $_REQUEST['id_usuario'];
        $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', telefone='$telefone' WHERE id_usuario='$id'";
        $res = $conn->query($sql);

        if ($res) {
            print "<script>alert('Editou com sucesso');</script>";
            print "<script>location.href='?page=listar-usuarios';</script>";
        } else {
            print "<script>alert('Não editou');</script>";
            print "<script>location.href='?page=listar-usuarios';</script>";
        }
        break;
    case 'excluir':
        $id = $_REQUEST['id_usuario'];
        $sql = "DELETE FROM usuarios WHERE id_usuario='$id'";

        $res = $conn->query($sql);
        if ($res) {
            print "<script>alert('Excluiu com sucesso');</script>";
            print "<script>location.href='?page=listar-usuarios';</script>";
        } else {
            print "<script>alert('Não excluiu');</script>";
            print "<script>location.href='?page=listar-usuarios';</script>";
        }
        break;
}
?>