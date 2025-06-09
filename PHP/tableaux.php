<?php
$tableau = [4,5.3,-8,"programmation",true]; # un tableau de 5 éléments sans clé explicite
echo $tableau[0],"\n"; # le premier élément du tableau, à l'indice 0, affiche 4
echo $tableau[3],"\n"; # le quatrième élément du tableau, à l'indice 3, affiche programmation
$tableau[3] = "PHP" ; # met à jour la valeur du quatrième élément du tableau, à l'indice 3
echo $tableau[3],"\n"; # le quatrième élément du tableau, à l'indice 3, affiche PHP
$tableau[] = "new !"; # ajoute un élément en fin de tableau avec la valeur indiquée
print_r($tableau); # affiche tout le contenu du tableau ; remarquez le dernier élément ajouté
# un tableau avec clés explicites
$famille = [
    "père"=>"jean",
    "mère"=>"marie",
    "grand-père_p"=>"antoine",
    "grand-mère_p"=>"alice",
    "grand-père_m"=>"franck",
    "grand_mère_m"=>"sarah"
];
echo $famille["père"],"\n" ; # la valeur de l'élément du tableau dont la clé est "père"
echo $famille["mère"],"\n" ; # la valeur de l'élément du tableau dont la clé est "mère"
# un tableau dont les valeurs sont des tableaux
$famille_bis = array(
    "père"=>"jean",
    "mère"=>"marie",
    "grand-père"=>array(
        "paternel"=>"antoine",
        "maternel"=>"franck"),
    "grand-mère"=>array(
        "paternel"=>"alice",
        "maternel"=>"sarah")
);
print_r($famille_bis); # affiche tout le contenu du tableau
?>