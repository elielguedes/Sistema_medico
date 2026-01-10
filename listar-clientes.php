<h1>listar-clientes</h1>
<?php
$sql = "SELECT * FROM clientes";

$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $qtd = $res->num_rows;

    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-houver'>";
    print "<thead>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Senha</th>";
    print "<th>cpf</th>";
    print "<th>ações</th>";
    print "</tr>";
    print "</thead>";
    print "<tbody>";

    while ($row = $res->fetch_object()) {
        $id = $row->id_cliente;
        $nome = $row->nome;
        $email = $row->email;
        $senha = $row->senha;
        $cpf = $row->cpf;

        print "<tr>";
        print "<td>$id</td>";
        print "<td>$nome</td>";
        print "<td>$email</td>";
        print "<td>$senha</td>";
        print "<td>$cpf</td>";
        print "<td>";
        print "<button class='btn btn-success' onclick=\"location.href='?page=editar-clientes&id_cliente={$id}';\">Editar</button> ";
        print "<button class='btn btn-danger' onclick=\"if (confirm('tem certeza que deseja excluir?')){location.href='?page=salvar-clientes&acao=excluir&id_cliente={$id}';}\">excluir</button>";
        print "</td>";
        print "</tr>";
    }
    print "</tbody>";
    print "</table>";
} else {
    print "<p>Nenhum resultado encontrado</p>";
}
?>