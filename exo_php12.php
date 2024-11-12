<?php
//tableau des valeurs
$tableauValeurs = [true,"texte",10,25.369,["valeur1","valeur2"]];

function afficherInfo($tableauValeurs){
//afficher var_dump de chaques éléments du tableau
    foreach($tableauValeurs as $value){
        var_dump ($value);
    }
};

afficherInfo($tableauValeurs);