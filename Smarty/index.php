<?php

include_once 'Smarty.class.php';
include_once 'mySmarty.class.php';

header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);

$pages = array(
    'parent'        => 'Родитель',
    'child'         => 'Дитё',
    'grandson'      => 'Дитё дети',
    'grandgrandson' => 'Дитё дети дети',
);


$page = array_key_exists('page', $_GET) ? $_GET['page'] : 'parent';
$page = in_array($page, array_keys($pages)) ? $page : 'parent';

/**
 *
 *
 */  
$template = new mySmarty();
$template->templates_dir = './templates';
$template->compile_dir = './templates_c';
$template->assign('pages', $pages);
$template->display($page . '.tpl');