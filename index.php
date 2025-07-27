<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar usuário</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="?page=listar_tarefas">Listar Tarefas</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="?page=nova_tarefa">Nova Tarefa</a>
</li>

      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuario.php");
                        break;
                        case "salvar":
                            include("salvar-usuario.php");
                        break;
                        case "editar":
                            include("editar-usuario.php");
                        break;
                        case "nova_tarefa":
                            include("nova-tarefa.php");
                        break;
                        case "listar_tarefas":
                            include("listar-tarefas.php");
                        break;
                        case "salvar_tarefa":
                            include("salvar-tarefa.php");
                        break;

                        case "editar_tarefa":
                            include("editar-tarefa.php");
                        break;
                        default:
                            print "<h1>Bem-vindo!</h1>";
                    }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>