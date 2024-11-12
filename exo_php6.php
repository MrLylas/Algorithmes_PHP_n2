<h1>Exercice 6</h1>

<?php
//création tableau 
$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($elements){
    $sexe = "<select name='sexe' id='sexe-select'>";
//création menu déroulant avec attribution valeurs du tableau
    foreach ($elements as $key => $value){
        $sexe .= "<option value ='".strtolower($value)."'>".$value."</option>";

    }
    $sexe .= "</select>";
    return $sexe;
}

echo alimenterListeDeroulante($elements);