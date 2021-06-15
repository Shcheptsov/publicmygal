<?php
class ViewController /*implements \Interfaces\CInterface*/{
    public function index(){
        global $smarty;
        global $params;
            $login = new ViewModel();
            $login->login = $params[0];
            $login->kat = $_GET['kat'];
            $res = $login->categoryList();
            $resImage = $login->infoImage();
            $smarty->assign('categories', $res);
            $smarty->assign('images', $resImage); 
           ($res) ?  $smarty->display('View.tpl') : die("Error".$res);
    }
}