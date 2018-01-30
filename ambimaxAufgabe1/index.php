
<?php


require __DIR__ . '/vendor/autoload.php';

$customer = [
    "Name"         => "name1",
    "Vorname"      => "vorname1",
    "Geburtsdatum" => "gebdat1",
    "Email"        => "mail1",
    "Telefon"      => "tel1",
];

\ambimax\App::export($customer, 'csv');
\ambimax\App::export($customer, 'xml');

echo 'done';

