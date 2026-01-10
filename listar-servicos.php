<h1>listar-servicos</h1>
<?php
$sql = "SELECT * FROM servicos";

$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $qtd = $res->num_rows;

    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-houver'>";
    print "<thead>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>descricao</th>";
    print "<th>preco</th>";
    print "<th>horario/data</th>";
    print "<th>ações</th>";
    print "</tr>";
    print "</thead>";
    print "<tbody>";

    while ($row = $res->fetch_object()) {
        $id = $row->id_servico;
        $nome = $row->nome;
        $preco = $row->preco;
        $descricao = $row->descricao;
        $duracao_min = $row->duracao_min;

        print "<tr>";
        print "<td>$id</td>";
        print "<td>$nome</td>";
        print "<td>$preco</td>";
        print "<td>$descricao</td>";
        print "<td>$duracao_min</td>";
        print "<td>";
        print "<button class='btn btn-success' onclick=\"location.href='?page=editar-servicos&id_servico={$id}';\">Editar</button> ";
        print "<button class='btn btn-danger' onclick=\"if (confirm('tem certeza que deseja excluir?')){location.href='?page=salvar-servicos&acao=excluir&id_servico={$id}';}\">excluir</button>";
        print "</td>";
        print "</tr>";
    }
    print "</tbody>";
    print "</table>";
} else {
    print "<p>Nenhum resultado encontrado</p>";
}
?>