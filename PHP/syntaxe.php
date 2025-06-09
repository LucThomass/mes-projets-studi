<?php
echo 'une simple chaîne de caractères', "\n" ;
echo 'et maintenant avec l\'apostrophe !',"\n" ;
echo <<<'MON_DELEMITEUR'
voici le début du texte
qui peut aller sur plusieurs lignes
et contenir des caractères spéciaux
comme l'apostrophe et la barre oblique inverse \
MON_DELEMITEUR;
$quantite = 12 ; # on affecte la valeur 12 à la variable $quantite
echo "\nCette boîte contient {$quantite} oeufs.\n" ;
echo "une\ttabulation" ; # le caractère spécial "\t" est une tabulation
echo <<<mon_identifiant_de_chaine
\nune chaîne avec\ndes\nlignes\nmultiples
ainsi que des variables interprétées :
{$quantite}
mon_identifiant_de_chaine;
?>