<h1>Exercice 4</h1>

<?php
//tableau pays + capitales
$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome"
];

//lien wikipedia 

$lien = "https://fr.wikipedia.org/wiki/";

//ordre alphabetique

ksort($capitales);

function afficherTableHTML($capitales){
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Liens wiki</th>
                    </tr>
                </thead>
                <tbody>";
                
//Attribution valeurs pays + ville + lien par ville

    foreach ($capitales as $pays => $capitale){
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitale' target = '_blank'>Lien</a></td>
                     </tr>";
    }
    $result .= "</tbody></table>";
    
    return $result;
}

echo afficherTableHTML($capitales);


