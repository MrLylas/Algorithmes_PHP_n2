<h1>Exercice 9</h1>

<?php

//création d'un tableau 
$nomsRadio = ["Monsieur","Madame","Mademoiselle"];

function afficherRadio($nomsRadio){
//champs d'action
    $choix = "<fieldset>";
//associations valeurs à puces radio
    foreach ($nomsRadio as $value){
        
        $choix .="<div>
                <input type='radio' id='".$value."' name = 'civilite' value = '".$value."'>
                <label for ='".$value."'>".$value."</label>
                </div>";
    }
    $choix .= "</fieldset>";
    return $choix;
}

echo afficherRadio($nomsRadio);