<?php 
  include ('conexao.php');

  if (isset($_POST['email']) || isset($_POST['senha'])){
    if (strlen($_POST['email']) == 0) {
      echo"Preencha seu email";
    } else if (strlen($_POST['senha']) == 0){
      echo"Preencha sua senha";
    }else{

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: painel.php");
      }else{
        header("Location: erro.php");
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="estilo.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
      <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <h1>&#9889; Mobilidade &#9889;</h1>
        <div class="input-box">
          <input type="email" placeholder="E-mail" required name="email">
          <i class='bx bxs-user' id="email"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Senha" required name="senha">
          <i class='bx bxs-lock-alt' id="senha"></i>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">Lembrar de mim</label>
          <a href="#">Esqueceu a senha?</a>
        </div>
        <button type="submit" class="btn">Logar</button>
        <div class="register-link">
          <p>Não tem uma conta? <a href="registrar.php">Registrar Executante</a></p>
        </div>
      </form>
</div>
</body>
</html>