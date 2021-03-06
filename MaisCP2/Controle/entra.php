<?php
 require_once('../Tabelas/ConexaoBd.php');
 $usuario_id = null;
 $erros = null;

 $request = array_map('trim', $_REQUEST);
 $request = filter_var_array(
								$request,
								[ 'nomeUsuario' => FILTER_DEFAULT,
									'senha' => FILTER_DEFAULT                 ]
						);

 $nomeUsuario = $request['nomeUsuario'];
 $senha = $request['senha'];


 if ($nomeUsuario == false)
 {
	 $erros = "Nome de usuário não informado";
 }
 if ($senha == false)
 {
	 $erros = "Senha não informada";
 }
 else
 {
   // PENDENTE: Concluir a validação
   $db = CriaConexãoBd();
   $sql = $db->prepare(
     "SELECT senha, usuario_id FROM usuario WHERE nomeUsuario = :nomeUsuario;"
   );


    $sql->bindValue(':nomeUsuario', $nomeUsuario );

    $sql->execute();

    $resultado = $sql->fetch();

   if ($resultado == false)
   {
  	 $erros = "Nenhum usuário cadastrado com esse nome de usuário";
   }
   else if (password_verify($senha, $resultado['senha']) == false)
   {
  	 $erros = "Senha inválida";
   }

   $usuario_id = $resultado['usuario_id'];

 }

 // PENDENTE: Em caso de sucesso, redirecionar o usuário para a página de inicio
 // PENDENTE: Em caso de erro, redirecionar usuário para a página de login para exibir as mensagens de erro
 if($erros != null){
	 session_start();
	 $_SESSION['erroLogin'] = $erros;
	 header('Location: ../index.php');
 }
 else
 {
   session_start();
   $_SESSION['nomeUsuarioLogado']= $nomeUsuario;
   $_SESSION['idUsuarioLogado']= $usuario_id;
   header('Location: ../inicio.php');
 }
?>
