<?php
	session_start();

	if(array_key_exists('nomeUsuarioLogado', $_SESSION))
	{
		header("Location:inicio.php");
	}

	if (array_key_exists('erroLogin',$_SESSION))
	{
	$erros = $_SESSION ['erroLogin'];
	unset($_SESSION['erroLogin']);
	}
	else {
		$erros = null;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>MaisCPII - Aprendendo além da escola</title>

  <link rel="icon" href="Imagens/favi.ico" type="image/ico" sizes="64x64">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="CSS/styleIndex.css">
</head>

<body>
  <div id="login-box">


    <div id="login-logo">
      <img src="Imagens/maiscp2.jpg" id="logo" alt="+CP2">
    </div>

		<?php if ($erros !=null) { ?>
			<div class="alert alert-warning">
				<p>Erro: <?= $erros ?></p>
			</div>
		<?php } ?>

    <div class="Container">
        <form method="POST" class="form" action="Controle/entra.php">
          <div class="form-group">
            <label>Nome de Usuário: <input name="nomeUsuario" type="text" required placeholder="Login" class="form-control"/></label>
          </div>
          <div class="form-group" style="font-size:13px;">
            <label>Senha: <input name="senha" type="password" required minlength="6" maxlength="12" placeholder="******" class="form-control"/></label>
          </br>  <a href="cadastro.php" name="entrar" style="font-size:13px;">Cadastre-se</a>
          ou
        </br> <a href="inicio.php" style="font-size:13px;">Entre como visitante</a>

          </div>


          <input type="submit" class="botao btn btn-primary" value="Entrar"/>
        </form>
    </div>

  </div>

</body>
</html>
