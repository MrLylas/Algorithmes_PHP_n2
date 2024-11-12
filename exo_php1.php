<h1>Exercice 1</h1>

<style>
    .red{
        color : red;
    }
</style>




<?php

$texte = "Mon texte en paramètre";
$texte2 = "Mon autre texte en paramètre";

//Afficher le résultat de la fonction convertirMajRouge
echo convertirMajRouge($texte);
echo convertirMajRouge($texte2);

echo convertirMajColor($texte, 'blue');

function convertirMajRouge($texte){
    $result = mb_strtoupper($texte);
    $result = "<p class='red'>$result</p>";
    return $result;
}

function convertirMajRouge2($texte2){
    return "<p class='red'>".$texte2.mb_strtoupper($texte)."</p>";
}

function convertirMajColor($texte, $color){
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";
}

?>