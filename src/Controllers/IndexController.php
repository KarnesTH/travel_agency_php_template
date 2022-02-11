<?php

class IndexController {
    protected $siteParameter;
    protected $context = [];
    
    public function __construct($siteParameter) {
        $this->setSiteParameter($siteParameter);
    }

    public function run() {

        # switch-Statement komplett ersetzen
        # Fälle berücksichtigen: falls ein action-Value keine Template-Datei hat
        # Problematik: Name Template und Name action-Value
        # Daten an View übergeben

        
        
        $this->render();
    }

    protected function addContext($key, $value) {
        $this->context[$key] = $value;
        return $this;
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
