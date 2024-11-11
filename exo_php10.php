<h1>Exercice 10</h1>


<?php


$formulaire = ["Nom", "Prenom", "email", "Ville", "Sexe", "Formation"];

function afficherFormulaire($formulaire){

    $result = "<form action='get'>";

    foreach ($formulaire as $value){
        if ($value == "email") {
            $type = "email";
            $inputTag = "<input type='email' id='".$value."' name='".$value."'>";
        } elseif ($value == "Sexe") {
            $type = "radio"; 
            $inputTag = "
                <input type='radio' id='".$value."_homme' name='".$value."' value='Homme'>
                <label for='".$value."_homme'>Homme</label>
                <input type='radio' id='".$value."_femme' name='".$value."' value='Femme'>
                <label for='".$value."_femme'>Femme</label>
            ";
        } elseif ($value == "Formation") {
            $type = "select"; 
            $inputTag = "
                <select id='".$value."' name='".$value."'>
                    <option value='developpeurlog'>Développeur Logiciel</option>
                    <option value='webDesigner'>Designer web</option>
                    <option value='Chef de projet'>Chef de projet</option>
                </select>
            ";
        } else {
            $type = "text";
            $inputTag = "<input type='text' id='".$value."' name='".$value."'>";
        }
        $result .= "
            <div>
                <label for='".$value."'>".$value.":</label>
                ".$inputTag."
            </div>
        ";
    }

    $result .= "<button type='submit'>Envoyer</button></form>";
    
    return $result;
}

echo afficherFormulaire($formulaire);

?>
