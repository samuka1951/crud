<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("confg.php");
          switch (@$_REQUEST['page']) {
            case 'novo':
              include("novo-usuario.php");
              // code...
              break;
              case 'listar':
                include("listar-usuario.php")
                ;
                // code...
                break;
                case 'salvar':
                  include("salvar-usuario.php");
                  // code...
                  break;
                case 'editar':
                  include("editar-usuario.php");
                  // code...
                  break;
                  // code...     
            default:
            print "<h1>Bem vindos</h1>";
              // code...
              
          }
        ?>
        
      </div>
      
    </div>  
    
  </div>



<script src="/bootstrap.bundle.min.js"></script>

        
      </body>
    </html>