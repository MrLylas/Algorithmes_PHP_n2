
<?php

//crèation tableaux d'images et lien d'image
$cadres = ["image1","image2","image3","image4"];
$lien = "https://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($cadres, $lien){
    $images = "<div>";
//pour chaque élément du tableau afficher image
    foreach($cadres as $value){
        $images .= "<img src='$lien' alt='Petit chihuaha tenant une peluche'>";
    }
    $images .= "</div>";
    return $images;
}

echo repeterImage($cadres, $lien);