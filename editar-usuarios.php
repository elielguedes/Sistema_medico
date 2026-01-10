<h1>cadastrar usuarios</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id_usuario";

$res = $conn->query($sql);

$row = $res->fetch_object();
?>
<form action="?page=salvar-usuarios" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
    <div class="mb-3">
        <label>Usuario
            <input type="text" name="nome" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
            <input type="text" name="email" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Senha
            <input type="password" name="senha" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>telefone
            <input type="number" name="telefone" class="form-control">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>