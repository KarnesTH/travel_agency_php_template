<?php

class IndexController {
    public function run($action) {
        // switch ($action) {
        //     case 'aboutus':
        //         $template = 'about-us';
        //         break;
        //     case 'ouroffer':
        //         $template = 'our-offer';
        //         break;
        //     case 'customerprotection':
        //         $template = 'customer-protection';
        //         break;
        //     case 'contact':
        //         $template = 'contact';
        //         break;
        //     case 'feedback':
        //         $template = 'feedback';
        //         break;
        //     default:
        //         $template = 'main';
        //         break;
        // }
        $template = $action;
        $this->render($template);
    }

    protected function render($template) {
        require_once 'templates/' . $template . '.php';
    }
}
