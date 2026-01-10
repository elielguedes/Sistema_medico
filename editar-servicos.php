<h1> Editar serviço </h1>
<?php
$sql = "SELECT * FROM servicos WHERE id_servico";

$res = $conn->query($sql);

$row = $res->fetch_object();
?>
<form action="?page=salvar-servicos" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_servico" value="<?php print $row->id_servico; ?>">
    <div class="mb-3">
        <label>nome
            <input type="text" name="nome" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Descricao
            <input type="text" name="descricao" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Preço R$
            <input type="number" name="preco" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Horario/data
            <input type="datetime-local" name="duracao_min" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>