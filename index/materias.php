<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MaisCP2 - Aprendendo Além da Escola</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/styleMaterias.css">
  <link rel="icon" href="Imagens/favi.ico" type="image/ico" sizes="64x64">


</head>

<div class="header">
  <div class="row">
    <div class="col-lg-12">
      <div class="esquerda">
        <a href="index.php"  title="maiscp2.com" class="navBar TextoLink"><img src="Imagens/logoLink.png" class="logoImagem">MaisCP2</a>

        <a class= "navBar TextoLink" href="inicio.php">Início</a>
        <a class= "navBar TextoLink" href="materias.php">Matérias</a>
        <a class= "navBar TextoLink" href="a">Respostas</a>
        <a class= "navBar TextoLink" href="a">Perfil</a>
        <form class="searchBar" action="/action_page.php">
          <input class="textBusca"  type="text" action="Controle/Threads/pesquisar.php" placeholder="Pesquisar" name="pesquisar">
          <button type="submit"><i class="search fa fa-search"></i></button>
        </form>


      </div>



      <div class="direita">
        <a  class= "btn btn-primary botao" href="index.php" title="Sair">Sair</a>
      </div>
    </div>
  </div>
</div>


<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12  forumMod forumMargin table">
        <h1>Selecione a matéria</h1>

        <table>
          <tr>
            <th> <a href="a"> <p id="bio"> Biologia </p> <img class="img1" src="Imagens/bio.jpg"> </a> </th>
            <th> <a href="a"> <p id="des"> Desenho </p> <img class="img1" src="Imagens/des.jpg"> </th>
            <th> <a href="a"> <p id="edfis"> Educação Física </p> <img class="img1" src="Imagens/edfis.jpg"> </th>
            <th> <a href="a"> <p id="filo"> Filosofia e Sociologia </p> <img class="img1" src="Imagens/filo.jpg"> </th>
          </tr>
          <tr>
            <th> <a href="a"> <p id="fis"> Física </p> <img class="img1" src="Imagens/fis.jpg"> </a> </th>
            <th> <a href="a"> <p id="geo"> Geografia </p> <img class="img1" src="Imagens/geo.jpg"> </a> </th>
            <th> <a href="a"> <p id="his"> História </p> <img class="img1" src="Imagens/hist.jpg"> </a> </th>
            <th> <a href="a"> <p id="info"> Informática </p> <img class="img1" src="Imagens/info.jpg"> </a> </th>
          </tr>
          <tr>
            <th> <a href="a"> <p id="le"> Lingua Estrangeira </p> <img class="img1" src="Imagens/le.jpg"> </a> </th>
            <th> <a href="a"> <p id="mat"> Matemática </p> <img class="img1" src="Imagens/mat.jpg"> </a> </th>
            <th> <a href="a"> <p id="port"> Português </p> <img class="img1" src="Imagens/port.jpg"> </a> </th>
            <th> <a href="a"> <p id="qui"> Química </p> <img class="img1" src="Imagens/qui.jpg"> </a> </th>
          </tr>

        </table>



      </div>
    </div>
  </div>




</body>
</html>