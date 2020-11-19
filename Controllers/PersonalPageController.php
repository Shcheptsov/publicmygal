<?php

class PersonalPageController /*implements \Interfaces\CInterface*/{
    public function lk() {
        global $smarty;
        $smarty->display('Lk.tpl');
    }
    
        public function main() {
        global $smarty;
        $smarty->display('PersonalMain.tpl');
    }
        public function pages() {
        global $smarty;
        $smarty->display('PersonalPages.tpl');
    }
        public function analytics() {
        global $smarty;
        $smarty->display('PersonalAnalytics.tpl');
    }
}
