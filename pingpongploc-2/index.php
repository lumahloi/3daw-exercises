<?php 
  require "./numeroParaTexto.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PingPongPloc</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>PingPongPloc</h1>
    <div class="output">
      <?php
        for ($i = 1; $i <= 100; $i++) {
          echo "<div class='linha'>";
          echo "<span class='numero'>$i</span>";

          echo " " . numeroParaTexto(n: $i);

          echo "</div>";
        }
      ?>
    </div>
  </div>
</body>
</html>