<h1>listar-usuarios</h1>
<?php
$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $qtd = $res->num_rows;

    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-houver'>";
    print "<thead>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Usuario</th>";
    print "<th>E-mail</th>";
    print "<th>Senha</th>";
    print "<th>telefone</th>";
    print "<th>ações</th>";
    print "</tr>";
    print "</thead>";
    print "<tbody>";

    while ($row = $res->fetch_object()) {
        $id = $row->id_usuario;
        $nome = $row->nome;
        $email = $row->email;
        $senha = $row->senha;
        $telefone = $row->telefone;

        print "<tr>";
        print "<td>$id</td>";
        print "<td>$nome</td>";
        print "<td>$email</td>";
        print "<td>$senha</td>";
        print "<td>$telefone</td>";
        print "<td>";
        print "<button class='btn btn-success' onclick=\"location.href='?page=editar-usuarios&id_usuario={$id}';\">Editar</button> ";
        print "<button class='btn btn-danger' onclick=\"if (confirm('tem certeza que deseja excluir?')){location.href='?page=salvar-usuarios&acao=excluir&id_usuario={$id}';}\">excluir</button>";
        print "</td>";
        print "</tr>";
    }
    print "</tbody>";
    print "</table>";
} else {
    print "<p>Nenhum resultado encontrado</p>";
}
?>