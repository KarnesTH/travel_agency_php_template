<?php

class IndexController {
    protected $siteParameter;
    protected $context = [];
    
    public function __construct($siteParameter) {
        $this->setSiteParameter($siteParameter);
    }

    public function run() {
        if (isset($this->siteParameter['actionMethode']) && method_exists($this, $this->siteParameter['actionMethode'])) {
            $actionMethod = $this->siteParameter['actionMethode'];
            $this->$actionMethod();
        } 
        $this->render();
    }

    protected function addContext($key, $value) {
        $this->context[$key] = $value;
        return $this;
    }

    public function showOfferAction() {
        $offers = Offer::findAll();
        $this->addContext('offers', $offers);
    }

    protected function render() {
        extract($this->siteParameter, EXTR_PREFIX_ALL, 'sp');
        extract($this->context);

        require_once 'templates/header.tpl.php';
        require_once 'templates/' . $sp_template;
        require_once 'templates/footer.tpl.php';
    }

    public function setSiteParameter($siteParameter) {
        $this->siteParameter = $siteParameter;
        return $this;
    }
}
