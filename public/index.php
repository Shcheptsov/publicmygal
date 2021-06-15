<?php
//получаем содиржимое url запроса
//Автоматическая загрузка классов spl_autoload_register
error_reporting(E_ERROR );
ini_set('display_errors', 'On'); 
require_once ('../Classes/DB.php');
require_once ('../Classes/Session.php');
require_once ('../libs/smarty/Smarty.class.php');
\Classes\Session::start();

$smarty = new Smarty();
$smarty->setTemplateDir('../Views');

spl_autoload_register(function ($class){
    $path = "../%s/".$class.".php";//Шаблон
    switch (true) {
        case strpos($class, "Controller"):
            $path = sprintf($path, "Controllers");
        break;
//        case strpos($class, "Interface"):
//            $path = sprintf($path, "Interfaces");
//        break;
        case (strpos($class, "Model")):
            $path = sprintf($path, "Models");
             break;
        default:
            $path = sprintf($path, "Classes");
        break;
    }
    (file_exists($path)) ? require_once($path): die ("404 error, not found controller".$path);
});

$data = ltrim($_SERVER['REQUEST_URI'],"/");
$data = array_shift(explode("?", $data ));
$data = explode("/", $data);

$controller = (!$data) ? "MainController" : ucfirst(array_shift($data))."Controller";

if ($controller == 'ViewController'){
    $action ='index';
} else {
    $action = (!$data) ? "index" : array_shift($data);
}

$params = ($data) ? : [];

$controllerObj = new $controller();
if (!method_exists($controllerObj, $action)){
    die ("404 error, not found models");
}
$controllerObj -> $action();



