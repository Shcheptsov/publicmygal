<?php
class MainController /*implements \Interfaces\CInterface*/{
    public function index() {
        global $smarty;
        $smarty->display('Main.tpl');
    }
    
    public function example() {
        global $smarty;
        $smarty->display('Example.tpl');
    }
    
    public function pricing() {
        global $smarty;
        $smarty->display('Pricing.tpl');
    }
    
    public function contacts() {
        global $smarty;
        $smarty->display('Contacts.tpl');
    }
}
