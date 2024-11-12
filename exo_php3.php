<h1>Exercice 3</h1>

<h2>Lien hypertexte vers le site Elan formation : </h2><br>

<?php

//lien à utiliser 

$lien = "https://elan-formation.fr/accueil";

function afficherLien($lien){
    $url = "<a href='$lien' target = _blank>Lien Hypertext</a>";
    echo $url;
}

afficherLien($lien);
