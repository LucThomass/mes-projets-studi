<html>
  <head>
    <title>Devine mon nombre !</title>
  </head>
  <body>
    <h1>Pense à un nombre entre 1 et 25 !</h1>
    <?php 
        $nombre = 25; // Le nombre à trouver
        $nombreDeTentatives = 20; // Le nombre de tentatives autorisées
        
        if ($nombre < 0 || $nombre > 25) {
          echo 'Hey, tu triches ! On avait dit entre 0 et 25 !';
        } else {
    ?>
    <p>J'essaye de le deviner...</p>
    <?php
          $essais = 0;
          do {
            $tentative = rand(0, 25);
            echo 'Est-ce que c\'est ' . $tentative . ' ? ';

            if ($tentative == $nombre) {
              echo '<h2>OUI !</h2>';
              break;
            } else {
              echo 'Non...<br>';
            }
            $essais++;
          } while ($essais < $nombreDeTentatives);
          if ($tentative != $nombre) {
            echo '<br>Je n\'ai pas trouvé =(';
          }
        }
    ?>
  </body>
</html>