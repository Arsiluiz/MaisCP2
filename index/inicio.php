<?php
  require_once('Tabelas/ConexaoBd.php');
  require_once('Tabelas/TabelaUsuario.php');
  require_once('Tabelas/TabelaThread.php');
  session_start();

  if(array_key_exists('nomeUsuarioLogado', $_SESSION))
  {
    $nomeUsuario = $_SESSION['nomeUsuarioLogado'];
    $usuario = BuscaUsuario($nomeUsuario);
  }
  else
  {
    $nomeUsuario = "Visitante";
    $usuario = null;
  }

  $db = CriaConexãoBd();
  $sql = $db->prepare(
    "SELECT titulo, thread_id, disciplina.nome, usuario.nomeUsuario AS autor
     FROM thread
     INNER JOIN usuario ON thread.usuario_id = usuario.usuario_id
     INNER JOIN disciplina ON thread.disciplina = disciplina.disciplina_id;

     "

  );

  $sql->execute();

  /* if (termo que o usuario digitou na pesquisa != null){
      $listaThreads =BuscaThreadsPorTermo();
    }
    else{
      $listaThreads = ListaThreads();
    }
  */

  $listaThreads = ListaThreads();



 ?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>MaisCP2 - Aprendendo Além da Escola</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/styleInicio.css">
  <link rel="icon" href="Imagens/favi.ico" type="image/ico" sizes="64x64">

</head>

<div class="header">
  <div class="row">
    <div class="col-lg-12">
      <div class="esquerda">
        <a href="index.php"  title="maiscp2.com" class="navBar TextoLink"><img src="Imagens/logoLink.png" class="logoImagem">MaisCP2</a>

        <a class= "navBar TextoLink" href="inicio.php">Início</a>
        <a class= "navBar TextoLink" href="materias.php">Matérias</a>
        <a class= "navBar TextoLink" href="a">Perfil</a>
        <form class="searchBar" action="pesquisa.php">
          <input class="textBusca" method="POST" type="text" placeholder="Pesquisar" name="pesquisar">
          <button type="submit"><i class="search fa fa-search"></i></button>
        </form>


      </div>



      <div class="direita">
        <span class="navbar-text ml-auto">Olá, <?= $nomeUsuario?></span>
        <?php if ($usuario == false) { ?>
          <a  class= "btn btn-primary botao" href="cadastro.php" title="Cadastrar-se">Cadastre-se</a>
        <?php } ?>
        <a  class= "btn btn-primary botao" href="Controle/sai.php" title="Saia">Sair</a>

      </div>
    </div>
  </div>
</div>


<body>
  <div class="container">
    <div class="row">
        <div class="col-lg-12  forumMod forumMargin">
              <div class="esquerda">
                <h1>Todas as matérias</h1>
              </div>

              <div class="direita">

                <?php if ($usuario != false) { ?>
                  <a  class= "btn btn-primary botao" href="pergunta.php" title="Perguntar">Adicionar pergunta</a>
                <?php } ?>

              </div>

              <div class=" row forumMod forumPad">


                <table id="table_threads" class="table">
                  <tr>
                      <th>Autor</th>
                      <th> Título</th>
                  </tr>
                  <?php foreach ($listaThreads as $thread) { ?>
                    <tr>
                      <td><a href="perfil.php?id=<?= $thread['usuario_id']?>"><?= $thread['nomeUsuario']?></a></td>
                      <td><a href="thread.php?thread_id=<?= $thread['thread_id']?>"><?= $thread['titulo']?></a></td>
                    </tr>
                  <?php } ?>
                </table>
            </div>
        </div>


    </div>


    </div>
  </div>

</body>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" type="text/javascript"> </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"> </script>
</html>
