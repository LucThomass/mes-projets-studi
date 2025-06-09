<?php
# on définit une nouvelle classe qui contient un constructeur
class Livre2{
    public $titre;
    public $auteur;
    public $parution;
    function __construct($t, $a, $p){
        $this->titre = $t;
        $this->auteur = $a;
        $this->parution = $p;
    }
}
# à la création de l’objet, on passe au constructeur les valeurs des propriétés
$livre2 = new Livre2("De la Terre à la Lune","Jules Vernes",1865);
$livre2 = new Livre2("De la Terre à la Lune","Jules Vernes",1865); # on crée l’objet
print_r($livre2); # on affiche l’objet
?>