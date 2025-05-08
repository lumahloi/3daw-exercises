<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Múltiplos de 5</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Múltiplos de 5</h1>
    <div class="output">
      <?php
        for ($i = 1; $i <= 100; $i++) {
          if ($i % 5 == 0) {
            echo "<div class='linha'><span class='multiplo'>$i</span></div>";
          }
        }
      ?>
    </div>
  </div>
</body>
</html>
