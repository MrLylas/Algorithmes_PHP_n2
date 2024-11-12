<h1>Exercice 2</h1>

<?php

$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome"
];
//ordre alphabetique
ksort($capitales);

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                        </tr>
                    </thead>
                <tbody>";
//Attribution valeurs des pays et leurs capitales
        foreach ($capitales as $pays => $capitale){
            $result .= "<tr>
                            <td>".mb_strtoupper($pays)."</td>
                            <td>$capitale</td>
                        </tr>";
        }
        $result .= "</tbody></table>";
        
        return $result;
}




