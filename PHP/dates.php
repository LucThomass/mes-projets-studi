<?php
// Définir une date spécifique en 2023
$dateInput = "2023-03-15 12:00:00";
$dateTime = new DateTime($dateInput);

// Formater les différentes dates
$date1 = $dateTime->format("m.d.y");
$date2 = $dateTime->format("Ymd");
$date3 = $dateTime->format("H:i:s");
$date4 = $dateTime->format("Y-m-d H:i:s");
$date5 = $dateTime->format("d l F Y");

// Vérifier si l'année est bissextile
$date6 = $dateTime->format("L");
$responds = ($date6 != 0) ? "Oui" : "Non";

// Afficher les résultats
echo "date 1 : " . $date1 . "<br>";
echo "date 2 : " . $date2 . "<br>";
echo "date 3 : " . $date3 . "<br>";
echo "date 4 : " . $date4 . "<br>";
echo "date 5 : " . $date5 . "<br>";
echo "date 6 : L'année est-elle bissextile ? " . $responds . "<br>";
?>