<?php

$tableauValeurs = [true,"texte",10,25.369,["valeur1","valeur2"]];

function afficherInfo($tableauValeurs){
    foreach($tableauValeurs as $value){
        var_dump ($value);
    }
};

afficherInfo($tableauValeurs);