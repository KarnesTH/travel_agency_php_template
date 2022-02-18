<?php

$optionen = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // nur zur Entwicklung!
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT, // im produktiven Umfeld
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
];

$db = new PDO(
    'mysql:host=localhost;dbname=travel_agency', // neue DB!
    'root',
    'c37sWQPa@',
    $optionen
);

$db->query('SET NAMES utf8');
