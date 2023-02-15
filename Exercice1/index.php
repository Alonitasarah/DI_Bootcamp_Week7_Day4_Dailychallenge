<?php

// Lire le fichier JSON dans une chaîne de caractères
$json_string = file_get_contents("my_data.json");

// Décoder la chaîne JSON dans un tableau associatif
$data = json_decode($json_string, true);

// Accéder aux données dans le tableau
echo 'Name: ' . $data['Student'][0]['Name'] . '<br>';
echo 'Roll: ' . $data['Student'][0]['Roll'] . '<br>';
echo 'Subject: ' . $data['Student'][0]['subject'] . '<br><br>';

echo 'Name: ' . $data['Student'][1]['Name'] . '<br>';
echo 'Roll: ' . $data['Student'][1]['Roll'] . '<br>';
echo 'Subject: ' . $data['Student'][1]['subject'] . '<br>';

?>
