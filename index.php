<?php

if ($_GET) {
    if (isset($_GET['action']) && $_GET['action'] === 'aboutus') {
        require_once __DIR__ . '/templates/about-us.php';
    }
} else {
    require_once __DIR__ . '/templates/main.php'; 
}