<?php
# Armistice 1945
$date = date_create('1945-05-08');
# Affiche la date selon un formatage spécifique
echo date_format($date, 'd'),"\n"; # jour sur 2 chiffres
echo date_format($date, 'j'),"\n"; # jour sans 0 initial
echo date_format($date, 'N'),"\n"; # jour de la semaine (1 pour lundi)
echo date_format($date, 'w'),"\n"; # jour de la semaine (0 pour dimanche)
echo date_format($date, 'z'),"\n"; # jour dans l’année
echo date_format($date, 'm'),"\n"; # mois sur 2 chiffres
echo date_format($date, 'n'),"\n"; # mois sans 0 initial
echo date_format($date, 'Y'),"\n"; # l’année sur 4 chiffres
echo date_format($date, 'y'),"\n"; # l’année sur 2 chiffres
echo date_format($date, 'T'),"\n"; # le fuseau horaire
echo date_format($date, 'c'),"\n"; # le format ISO 8601
# une combinaison de plusieurs formats
echo date_format($date, 'j.n.y'),"\n";
?>