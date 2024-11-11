<h1>Exercice 7</h1>

<?php

$elements = ["Choix 1","Choix 2","Choix 3"];

function genererCheckbox($elements){
    
    $choix = "<fieldset>";
    
    foreach ($elements as $key => $value){
        
        $choix .="<div>
                <input type='checkbox' id='".$value."'>
                <label for ='".$value."'>".$value."</label>
                </div>";
    }
    $choix .= "</fieldset>";
    return $choix;
}

echo genererCheckbox($elements);