<h1>Exercice 14</h1>

<?php
//adresse mail utilisées 
$email_a = 'elan@elan-formation.com';
$email_b = 'contact@elan';
//si l'adresse a est valide
if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est valide.<br>";
}
//si l'adresse b est valide
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est valide.<br>";
} 
//si l'adresse n'est pas valide
else {
    echo "L'adresse email '$email_b' est invalide.";
}
?>