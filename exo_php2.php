<h1>Exercice 2</h1>

<!--Mon tableau HTML-->

<!--Tête du tableau-->

<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>

<!--Corps du tableau-->

    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table>
<?php

$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome"
];

ksort($capitales);

foreach($capitales as $pays => $capitale){
    echo "Le pays $pays a pour capitale : $capitale <br>";
}

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

        foreach ($capitales as $pays => $capitale){
            $result .= "<tr>
                            <td>$pays</td>
                            <td>$capitale</td>
                        </tr>";
        }
        $result .= "</tbody></table>";
        
        return $result;
}




