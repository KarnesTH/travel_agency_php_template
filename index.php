<?php

require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/src/Controllers/IndexController.php';

// $action = $_GET['action'] ?? 'main';

// if (isset($_GET['action']) && defined(strtoupper($_GET['action']))) {
//     $siteParameter = constant(strtoupper($_GET['action']));
// } else {
//     $siteParameter = MAIN;
// }

$siteParameter = (isset($_GET['action']) && defined(strtoupper($_GET['action']))) ? constant(strtoupper($_GET['action'])) : MAIN;

$requestController = new IndexController($siteParameter);
$requestController->run();