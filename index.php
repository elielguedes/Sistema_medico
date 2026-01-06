<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema_agendamento</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expandend="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">home</a>
                    </li>

                    <li class="nav-item dropdwn">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expandend="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-usuarios">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-usuarios">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expandend="false">
                            clientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-clientes">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-clientes">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            servicos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-servicos">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-servicos">Listar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expandend="false">
                            agendamento
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-agendamento">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-agendamento">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            paguamento
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-paguamento">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-paguamento">Listar</a></li>
                        </ul>
                    </li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" arial-label="Search" />
                        <button class="bnt bnt-outline-success" type="submit">Search</button>
                    </form>
            </div>
        </div>
    </nav>
    <div class="container mt-03">
        <div class="row">
            <div class="col">
                <?php
                include('config.php');
                switch (@$_REQUEST['page']) {
                    //usuarios
                    case 'cadastrar-usuarios':
                        include('cadastrar-usuarios.php');
                        break;
                    case 'listar-usuarios':
                        include('listar-usuarios.php');
                        break;
                    case 'editar-usuarios':
                        include('editar-usuarios.php');
                        break;
                    case 'salvar-usuarios':
                        include('salvar-usuarios.php');
                        break;
                    //clientes
                    case 'cadastrar-clientes':
                        include('cadastrar-clientes.php');
                        break;
                    case 'listar-clientes':
                        include('listar-clientes.php');
                        break;
                    case 'editar-clientes':
                        include('editar-clientes.php');
                        break;
                    case 'salvar-clientes':
                        include('salvar-clientes.php');
                        break;
                    //servicos
                    case 'cadastrar-servicos':
                        include('cadastrar-servicos.php');
                        break;
                    case 'listar-servicos':
                        include('listar-servicos.php');
                        break;
                    case 'editar-servicos':
                        include('editar-servicos.php');
                        break;
                    case 'salvar-servicos':
                        include('salvar-servicos.php');
                        break;
                    //agendamento
                    case 'cadastrar-agendamento':
                        include('cadastrar-agendamento.php');
                        break;
                    case 'listar-agendamento':
                        include('listar-agendamento.php');
                        break;
                    case 'editar-agendamento':
                        include('editar-agendamento.php');
                        break;
                    case 'salvar-agendamento':
                        include('salvar-agendamento.php');
                        break;
                    //paguamento
                    case 'cadastrar-paguamento':
                        include('cadastrar-paguamento.php');
                        break;
                    case 'listar-paguamento':
                        include('listar-paguamento.php');
                        break;
                    case 'editar-paguamento':
                        include('editar-paguamento.php');
                        break;
                    case 'salvar-paguamento':
                        include('salvar-paguamento.php');
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>