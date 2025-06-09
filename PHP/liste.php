<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $animals = ['Lion', 'Chat', 'Chien', 'Cheval', 'Tigre', 'Singe']; // Ici, nous avons un tableau de 6 animaux
      echo '<ul>';
      foreach ($animals as $animal) { // On construit une balise <li></li> par animal, qui contient son nom
        echo '<li>'.$animal.'</li>';
      }
      echo '</ul>';
    ?>
  </body>
</html>