<?php
class AdminController {
    public function personal() {
        global $smarty;
        global $params;
        $userId = UserModel::getUserId($_SESSION['user']['login']);
        $login = new AdminModel();
        $login->login = $_SESSION['user']['login'];
        $login->userId = $userId['id'];
        $login->params = $params[0];
        $res = $login->categoryList();
        $items = $login->categoryId();
        
        if (empty($res)){
            $res[0]['kat'] ='Example1';
            $res[1]['kat'] ='Example2';
            $res[2]['kat'] ='Example3';
            $res[0]['id_category'] ='1';
            $res[1]['id_category'] ='2';
            $res[2]['id_category'] ='3';
            $login->table = 'content_example';
            $example = $login->categoryExample();
        }
        $smarty->assign('categories', $res); 

        if(!empty($res) && !empty($example)){
           $smarty->assign('imageExample', $example);
           $smarty->display('admin/index.tpl'); 
        }elseif(!empty($res) && empty($example)){
           $smarty->assign('items', $items); 
           $smarty->display('admin/index.tpl'); 
        }else{
           die("Error пустая категория".$res); 
        }
    }

    public function images(){
        global $smarty;
        $userId = UserModel::getUserId($_SESSION['user']['login']);
        $categories = CategoryModel::categoryList($userId['id']);
         if (empty($categories)){
             $categories[0]['kat'] = 'create category';
             $categories[0]['id_category'] = '1';
         }
        $smarty->assign('categories', $categories);
        $smarty->display('admin/Image.tpl');
    }
    
    public function imagesUpdate(){
        global $smarty;
        $categoryId = CategoryModel::getCategoryId($_POST['name']);
        $userId = UserModel::getUserId($_SESSION['user']['login']);
        $modal = new CategoryModel();
        $modal->catId = $categoryId['id_category'] ;
        $modal->userId = $userId['id'] ;
        $res = $modal->updateList();
        $this->response(['success' => $res]);
    }
    
    public function items_create() {
        $userId = UserModel::getUserId($_SESSION['user']['login']);
        $item = new ImageModel();
        $item->description = $_POST['description'];
        $item->category_id = $_POST['category'];
        $item->userId = $userId['id'];   
        $item->save($_SESSION['user']['login']);
    }
    
    public function categories() {
        global $smarty;
         $userId = UserModel::getUserId($_SESSION['user']['login']);
        $categories = CategoryModel::categoryList($userId['id']);
        $smarty->assign('categories',$categories);
        $smarty->display('admin/categories.tpl');
    }
    
    public function category_create() {
        $userId = UserModel::getUserId($_SESSION['user']['login']);
        $categoryModel = new CategoryModel();
        $categoryModel->name = $_POST['name'];
        $categoryModel->userId = $userId['id'];
        $checkCategory = $categoryModel->checkCategory($userId['id']);
        $id_category = $checkCategory[0]['id_category']+1;
        if($checkCategory){
            $category_id = $categoryModel->save($id_category);//todo check return
        } else{die('ERROR category_create ');}
        if($category_id){
           mkdir("../Users/".$_SESSION['user']['login']."/".$id_category."", 0700);
           mkdir("../Users/".$_SESSION['user']['login']."/".$id_category."/thumbs", 0700);
        }
        
        $this->response(['success' => (bool)$category_id, 'id' => $category_id]);
    }
    
    public function category_remove() {
        header("Content-Type: application/json");
        $categoryModel = CategoryModel::find($_POST['id']);
        $categoryId = CategoryModel::getCategoryId($_POST['kat']);
        if($CategoryModel instanceof CategoryModel ){
            $this->response(['success' => false]);
        }
        $userId = UserModel::getUserId($_SESSION['user']['login']);
        $categoryModel->userId = $userId['id'];
        $categoryModel->categoryId = $_POST['id'];
        $resImageList = $categoryModel->removeImageList();
        foreach ($resImageList as  $resImageId){
            $categoryModel->categoryId = $resImageId;
            $resImageList = $categoryModel->removeImage();
        }
        $res = $categoryModel->removeCategory();//todo check return
        if($res){
            rename("../Users/".$_SESSION['user']['login']."/".$categoryId['id_category'], "../Users/".$_SESSION['user']['login']."/".$categoryId['id_category']."-archiv-".date("m.d.y"));
       }        
        $this->response(['success' => $res]);    
    }
    
    public function category_update() {
        $categoryModel = CategoryModel::find($_POST['id']);
        if(!$categoryModel){
            $this->response(['success' => false]);
        }
        $categoryModel->name = $_POST['name'];
        $res = $categoryModel->update();
        $this->response(['success' => $res]);
    }
    
    private function response($data = ['success' => true]) {
         header("Content-Type: application/json");
                 die(json_encode($data));  
    }
}