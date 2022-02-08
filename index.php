<?php

$action = $_GET['action'] ?? 'main';

switch ($action) {
    case 'aboutus':
        $template = 'about-us';
        break;
    case 'ouroffer':
        $template = 'our-offer';
        break;
    case 'customerprotection':
        $template = 'customer-protection';
        break;
    case 'contact':
        $template = 'contact';
        break;
    case 'feedback':
        $template = 'feedback';
        break;
    default:
        $template = 'main';
        break;
}

require_once __DIR__ . '/templates/' . $template . '.php';