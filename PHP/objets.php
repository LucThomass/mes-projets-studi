<?php
# on définit notre modèle de Livre avec nos 3 propriétés
class Livre{
    public $titre;
    public $auteur;
    public $parution;
}
# on crée une instance de Livre, puis on renseigne ses propriétés
$livre1 = new Livre();
$livre1->titre = "Voyage au Centre de la Terre"; # on renseigne le titre
$livre1->auteur = "Jules Vernes"; # on renseigne l’auteur
$livre1->parution = 1864 ; # on indique l’année
print_r($livre1); # on affiche le contenu de l’instance
print_r($livre1->titre); # on affiche le titre du livre
?>