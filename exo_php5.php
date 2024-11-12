<h1>Exercice 5</h1>

<?php

//tableau d'informations

$nomsImput = ["Nom","Prénom","Ville"];

//création du formulaire

function afficherInput($nomsImput){
    $formulaire = "<form action='' method='get'>";

//attribution des valeurs du tableau 

    foreach($nomsImput as $key => $info){
        $formulaire .= "<label for='".strtolower($info)."'><br>".$info."</label><br>";
        $formulaire.="<input type ='text' id'".strtolower($info)."'name = '".strtolower($info)."'>";
        }
    $formulaire .= "</form>";
    return $formulaire;
};

echo afficherInput($nomsImput); 