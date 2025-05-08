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
          $multiplo_3 = ($i % 3 == 0);
          $multiplo_5 = ($i % 5 == 0);

          echo "<div class='linha'>";
          echo "<span class='numero'>$i</span>";

          if ($multiplo_3 && $multiplo_5) {
            echo ". <span class='ploc'>ploc</span>";
          } elseif ($multiplo_3) {
            echo ". <span class='ping'>ping</span>";
          } elseif ($multiplo_5) {
            echo ". <span class='pong'>pong</span>";
          } else {
            echo ". <span class='ok'>ok</span>";
          }

          echo "</div>";
        }
      ?>
    </div>
  </div>
</body>
</html>
