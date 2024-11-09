<!-- <label for="sexe-select"></label>

<select name="sexe" id="sexe-select">
    <option value="monsieur">monsieur</option>
    <option value="madame">madame</option>
    <option value="mademoiselle">mademoiselle</option>
</select> -->


<?php

$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($elements){
    $sexe = "<select name='sexe' id='sexe-select'>";

    foreach ($elements as $key => $value){
        $sexe .= "<option value ='".strtolower($value)."'>".$value."</option>";

    }
    $sexe .= "</select>";
    return $sexe;
}

echo alimenterListeDeroulante($elements);