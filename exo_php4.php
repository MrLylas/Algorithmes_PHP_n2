<h1>Exercice 4</h1>

<!--Mon tableau HTML-->

<!--Tête du tableau-->

<!-- <table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Lien wiki</th>
        </tr>
    </thead>

Corps du tableau-->

    <!-- <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
            <td><a href="https://fr.wikipedia.org/wiki/Paris">Lien</a></td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
            <td><a href="https://fr.wikipedia.org/wiki/Berlin">Lien</a></td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
            <td><a href="https://fr.wikipedia.org/wiki/Washington_(district_de_Columbia)">Lien</a></td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
            <td><a href="https://fr.wikipedia.org/wiki/Rome">Lien</a></td>
        </tr>
    </tbody>
</table> --> 

<?php

$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome"
];

$lien = "https://fr.wikipedia.org/wiki/";

ksort($capitales);

// foreach($capitales as $pays => $capitale){
//     echo "Le pays $pays a pour capitale : $capitale <br>";
// }


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


