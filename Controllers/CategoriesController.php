<?php

class CategoriesController{
    public function items(){
        global $params;
        $categories = CategoryModel::categoryList();
        $items =  ImageModel::itemsByCategoryId($params[0]);
        
        global $smarty;
        $smarty->assign('items', $items);
        $smarty->assign('categories', $categories);
        $smarty->display('Main.tpl');
        
    }
}
