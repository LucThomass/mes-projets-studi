<?php
if (function_exists('readline')) {
    $name = readline("Quel est votre nom ? ");
    echo "Bonjour, $name !\n";
} else {
    echo "La fonction readline() n'est pas disponible sur ce système.\n";
}
?>
