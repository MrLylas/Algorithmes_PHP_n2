<h1>Exercice 11</h1>

<?php
//choix de la région
$locale = "fr_FR";
//format de la date (jour/mois/AAAA)
$dateType = IntlDateFormatter::FULL;
//temps universel
$timeType = IntlDateFormatter::NONE;
//formatter au format fr
$formatter =new IntlDateFormatter($locale, $dateType, $timeType);
$dateTime = new DateTime("2015-02-28");
echo $formatter->format($dateTime);

























// date_default_timezone_set('Europe/Moscow');
// echo date("l j F Y");

// $jour = ["Monday"=>"Lundi",
// "Tuesday" => "Mardi",
// "Wednesday" => "Mercredi",
// "Thursday"=>"Jeudi",
// "Friday"=>"Vendredi",
// "Saturday"=>"Samedi",
// "Sunday"=>"Dimanche"]; 

// function formaterDateFr($journee){
//     }
