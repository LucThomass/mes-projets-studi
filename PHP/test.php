<?php
  if (copy('source.txt', 'destination.txt')) {
      echo "La copie du fichier a échoué";
  }
?>