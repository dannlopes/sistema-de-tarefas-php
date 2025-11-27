<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>A4 Solution</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo_Katchau.png" alt="Katchau" height="50px" style="max-height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Responsável
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar_responsavel">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar_responsavel">Listar</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuário
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar_usuario">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar_usuario">Listar</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projeto
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar_projeto">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar_projeto">Listar</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categoria
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar_categoria">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar_categoria">Listar</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tarefa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar_tarefa">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar_tarefa">Listar</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <?php 
                        
                        include("config.php");

                        switch (@$_REQUEST['page']) {
                            
                            case 'cadastrar_responsavel':
                                include("responsavel/cadastrar_responsavel.php");
                                break;
                            case 'listar_responsavel':
                                include("responsavel/listar_responsavel.php");
                                break;
                            case 'editar_responsavel':
                                include("responsavel/editar_responsavel.php");
                                break;
                            case 'salvar_responsavel':
                                include("responsavel/salvar_responsavel.php");
                                break;

                            
                            case 'cadastrar_usuario':
                                include("usuario/cadastrar_usuario.php");
                                break;
                            case 'listar_usuario':
                                include("usuario/listar_usuario.php");
                                break;
                            case 'editar_usuario':
                                include("usuario/editar_usuario.php");
                                break;
                            case 'salvar_usuario':
                                include("usuario/salvar_usuario.php");
                                break;

                            
                            case 'cadastrar_projeto':
                                include("projeto/cadastrar_projeto.php");
                                break;
                            case 'listar_projeto':
                                include("projeto/listar_projeto.php");
                                break;
                            case 'editar_projeto':
                                include("projeto/editar_projeto.php");
                                break;
                            case 'salvar_projeto':
                                include("projeto/salvar_projeto.php");
                                break;

                            
                            case 'cadastrar_categoria':
                                include("categoria/cadastrar_categoria.php");
                                break;
                            case 'listar_categoria':
                                include("categoria/listar_categoria.php");
                                break;
                            case 'editar_categoria':
                                include("categoria/editar_categoria.php");
                                break;
                            case 'salvar_categoria':
                                include("categoria/salvar_categoria.php");
                                break;

                            
                            case 'cadastrar_tarefa':
                                include("tarefa/cadastrar_tarefa.php");
                                break;
                            case 'listar_tarefa':
                                include("tarefa/listar_tarefa.php");
                                break;
                            case 'editar_tarefa':
                                include("tarefa/editar_tarefa.php");
                                break;
                            case 'salvar_tarefa':
                                include("tarefa/salvar_tarefa.php");
                                break;

                            
                            default:
                            $quantidade_pendente = $conn->query("SELECT * FROM tarefa WHERE status_tarefa = 'Pendente'")->num_rows;
                            $quantidade_adamento = $conn->query("SELECT * FROM tarefa WHERE status_tarefa = 'Em Andamento'")->num_rows;
                            $quantidade_concluida = $conn->query("SELECT * FROM tarefa WHERE status_tarefa = 'Concluída'")->num_rows;
                ?>
                    <div class="jumbotron bg-light p-4 rounded mb-4">
                        <h1 class="display-4">Bem-vindo ao A4 Solution!</h1>
                        <p class="lead">Sistema simplificado para controle de projetos e tarefas.</p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <div class="card text-white bg-danger mb-3 card-dashboard">
                                <div class="card-header">Tarefas Pendentes</div>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 2rem;"><?php print $quantidade_pendente; ?></h5>
                                    <p class="card-text">Tarefas que precisam de atenção imediata.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-warning mb-3 card-dashboard">
                                <div class="card-header">Em Andamento</div>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 2rem;"><?php print $quantidade_adamento; ?></h5>
                                    <p class="card-text">Tarefas sendo executadas pela equipe.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3 card-dashboard">
                                <div class="card-header">Concluídas</div>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 2rem;"><?php print $quantidade_concluida; ?></h5>
                                    <p class="card-text">Sucesso! Tarefas finalizadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <h3><i class="fas fa-history"></i> Últimas 5 Tarefas Criadas</h3>
                            <table class="table table-hover table-bordered mt-3">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Tarefa</th>
                                        <th>Prazo</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                        
                                        $sql_recentes = "SELECT * FROM tarefa ORDER BY id_tarefa DESC LIMIT 5";
                                        $res_recentes = $conn->query($sql_recentes);

                                        if($res_recentes->num_rows > 0){                                            
                                            while($row = $res_recentes->fetch_object()){                                                
                                                
                                                $cor_status = "";
                                                if($row->status_tarefa == 'Pendente'){
                                                    $cor_status = "text-danger fw-bold";
                                                } elseif ($row->status_tarefa == 'Concluída'){
                                                    $cor_status = "text-success fw-bold";
                                                } else {
                                                    $cor_status = "text-warning fw-bold";
                                                }

                                                print "<tr>";
                                                print "<td>{$row->id_tarefa}</td>";
                                                print "<td>{$row->titulo_tarefa}</td>";                                                
                                                print "<td>" . date('d/m/Y', strtotime($row->prazo_tarefa)) . "</td>";
                                                print "<td class='{$cor_status}'>{$row->status_tarefa}</td>";
                                                print "</tr>";
                                            }
                                        } else {
                                            print "<tr><td colspan='4' class='text-center'>Nenhuma tarefa registrada ainda.</td></tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                <?php
                        break;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>