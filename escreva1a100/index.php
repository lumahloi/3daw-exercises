<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador de 1 a 100</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Contador de 1 a 100</h1>
    <div class="output">
      <?php
        for ($i = 1; $i <= 100; $i++) {
          echo "<div class='linha'><span class='numero'>$i</span></div>";
        }
      ?>
    </div>
  </div>
</body>
</html>
