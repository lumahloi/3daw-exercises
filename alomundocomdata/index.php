<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações do Servidor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <h1>Bem-vindo!</h1>
    <p><strong>Nome:</strong> João da Silva</p>
    <p><strong>Data e Hora do Servidor:</strong> 
      <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo date("d/m/Y H:i:s");
      ?>
    </p>
  </div>
</body>
</html>
