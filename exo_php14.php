<h1>Exercice 14</h1>

<?php

$email_a = 'elan@elan-formation.com';
$email_b = 'contact@elan';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est valide.<br>";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est valide.<br>";
} else {
    echo "L'adresse email '$email_b' est invalide.";
}
?>