<?php

$nomsImput = ["Nom","Prénom","Ville"];

function afficherInput($nomsImput){
    $formulaire = "<form action='' method='get'>";
    
    foreach($nomsImput as $key => $info){
        $formulaire .= "<label for='".strtolower($info)."'><br>".$info."</label><br>";
        $formulaire.="<input type ='text' id'".strtolower($info)."'name = '".strtolower($info)."'>";
        }
    $formulaire .= "</form>";
    return $formulaire;
};

echo afficherInput($nomsImput); 