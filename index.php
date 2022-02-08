<?php

if ($_GET && isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'about-us':
            require_once __DIR__ . '/templates/about-us.php';
            break;
        case 'our-offer':
            require_once __DIR__ . '/templates/our-offer.php';
            break;
        case 'customer-protection':
            require_once __DIR__ . '/templates/customer-protection.php';
            break;
        case 'contact':
            require_once __DIR__ . '/templates/contact.php';
            break;
        case 'feedback':
            require_once __DIR__ . '/templates/feedback.php';
            break;
        default:
            require_once __DIR__ . '/templates/main.php';
            break;
    }
} else {
    require_once __DIR__ . '/templates/main.php'; 
}