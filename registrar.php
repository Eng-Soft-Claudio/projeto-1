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
        <h1>Cadastro</h1>
        <div class="input-box">
          <input type="email" placeholder="E-mail" required name="email">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Nome" required name="nome">
        </div>
        <div class="input-box">
          <input type="password" placeholder="Senha" required name="senha">
        </div>
        <button type="submit" class="btn">Registrar novo executante</button>
        <div style="margin-top: 20px; text-align:center;">
            <i class='bx bxs-error bx-flashing'> Volte para a tela inicial ➜</i>
            <a href="index.php" style="font-weight: bold; color: #fff;"> Voltar</a>
        </div>
      </form>
</div>
</body>
</html>