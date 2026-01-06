<h1>cadastrar clientes</h1>
<form action="?page=salvar-usuarios" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome
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
        <label>CPF
            <input type="text" name="cpf" class="form-control" maxlength="14" placeholder="000.000.000-00">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>