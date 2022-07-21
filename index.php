<?php

require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/datenbank.inc.php';
require_once __DIR__ . '/src/Controllers/IndexController.php';
require_once __DIR__ . '/src/Entities/Offer.php';

Offer::setDbConnector($db);

$siteParameter = (isset($_GET['action']) && defined(strtoupper($_GET['action']))) ? constant(strtoupper($_GET['action'])) : MAIN;

$requestController = new IndexController($siteParameter);
$requestController->run();