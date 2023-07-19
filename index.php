<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>CRUD PHP</title>
  </head>

  <script>
    const toggleMode = document.getElementById('toggle-mode');
    const body = document.body;

    toggleMode.addEventListener('change', function() {
      body.classList.toggle('dark-mode');
    });
  </script>

  <body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="toggle-container">
      <input type="checkbox" id="toggle-mode" class="toggle-checkbox">
      <label for="toggle-mode" class="toggle-label"></label>
    </div>
      <div class="container-fluid" id="navBarIndex">
        <a class="navbar-brand" href="#">CRUD PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="?page=novo">Novo Cadastro</a>
            <a class="nav-link" href="?page=listar">Lista</a>
            <!--<a class="nav-link" href="?page=editar">Editar Cadastro</a>-->
            <a class="nav-link" href="?page=delete">Excluir</a>
            <!--<a class="nav-link" href="?page=teste">Teste Form</a>-->
          </div>
        </div>
      </div>
    </nav>
    <div class = "container">
        <div class="row">
          <div class="col mt-5">
            <?php 
              include("config.php"); //carrega primeiramente nossa conexão com banco, primeira coisa a se fazer
              switch(@$_REQUEST["page"]){
                case "novo": 
                  include("teste-form.php");
                  break;
                case "listar":
                  include("lista-usuario.php");
                  break;
                case "editar":
                  include("editar-usuario.php");
                  break;
                case "delete":
                  include("deletar-usuario.php");
                  break;
                case "salvar":
                  include("salvar-usuario.php");
                  break;
                default: 
                  print "<h1>Bem vindo ao CRUD PHP</h1>";
              }  
            ?>
          </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>