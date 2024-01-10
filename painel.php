     <?php 
        include ('protect.php');
     ?>   


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
      <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <h1>Registro de Atividade</h1>
        <div class="input-box">
          <input type="number" placeholder="Pessoas na atividade" required name="quantidade" min="1" max="100">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Local de execução" required name="local">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Equipamento" required name="equipamento">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Descrição da atividade" required name="atividade">
        </div>
        <div class="input-box">
          <input type="date" placeholder="Data de execução" required name="data">
        </div>
        <div class="input-box">
          <input type="time" placeholder="Hora inicial" required name="inicio">
        </div>
        <div class="input-box">
          <input type="time" placeholder="Hora final" required name="fim">
        </div>
        <button type="submit" class="btn">Cadastrar a Atividade</button>
        <i class='bx bxs-error bx-flashing'> Clique para deslogar ➜</i><a href="index.php" style="font-weight: bold; color: #fff;"> Deslogar</a>
      </form>
</div>
</body>
</html>