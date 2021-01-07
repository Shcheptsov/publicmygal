<?php
//static function не нужно создавать объект(экземляр класса)
//$db = \Classes\DB::getInstance(); - Пример обращения
//self::$db = $db; обратиться к public static внутри public static function
//parent::sayHello() обратиться к функциям(методам, полям) унаследовнного класса, когда нет родителя(public $perem) 
class CategoryModel{
    public $name;
    public $catId;
    public $userId;
    public static function categoryList($userId){
       $db = \Classes\DB::getInstance(); 
       $query = "SELECT w.kat, w.id_category, w.id FROM `category`as w,`users`as t "
               . "where w.`id_user` = '".$userId."' and w.`id_user`= t.`id`";
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public function checkCategory($param){
        $db = \Classes\DB::getInstance(); 
       $query = "SELECT MAX(id_category) as id_category FROM `category` WHERE id_user='".$param."'";
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public function save($id_category){
        $query = "INSERT INTO `category` SET `kat` = '".$this->name."', `id_user` = '".$this->userId."', `id_category` = '".$id_category."'";
        $db = \Classes\DB::getInstance();
        $db->query($query);
        return $db->insert_id;
    }
    
    public static function find($id){
        $query = "SELECT * FROM `category` WHERE `id` = $id LIMIT 1";
        $db = \Classes\DB::getInstance();
        $result = $db->query($query)->fetch_assoc();
        if(!isset($result['kat'])){
            return null;
        } 
        $model = new self();//экземпляр класса самого себя
        $model->name = $result['kat'];
        $model-> id = $result['id'];
        $model-> id_category = $result['id_category'];
        return $model;
    }
    
    public function removeCategory(){
        $query ="DELETE FROM `category` WHERE `id` = ".$this->id." LIMIT 1";
        $db = \Classes\DB::getInstance();
        $db->query($query);
        return (bool) $db->affected_rows;
    }
    public function removeImageList(){
        $db = \Classes\DB::getInstance();
        $query = "SELECT t.id FROM `category` as w, `content` as t WHERE w.id ='".$this->categoryId."' and t.`id_user` ='".$this->userId."' and w.`id_category` = t.`category_id`";
        return $db->query($query)->fetch_assoc();     
    }

    public function removeImage(){
        $query ="DELETE FROM `content` WHERE `id` = ".$this->categoryId." LIMIT 1";
        $db = \Classes\DB::getInstance();
        $db->query($query);
        return (bool) $db->affected_rows;
    }

    public function update(){
        $query ="UPDATE `category` SET `kat` = '".$this->name."'  WHERE `id` = ".$this->id." LIMIT 1";
        $db = \Classes\DB::getInstance();
        $db->query($query);
        return (bool) $db->affected_rows;
    }
    
    public function getCategoryId($kat){
        $db = \Classes\DB::getInstance();
        $query = "SELECT `id_category` FROM `category` WHERE `kat` = '".$kat."'";
        return $db->query($query)->fetch_assoc();
    }
    
    public function updateList(){
        $query = "SELECT w.`id`, w.`id_user`, w.`imageName`, w.`imageType`, w.`imageDir`, w.`imageText`, w.`category_id`, t.`login` FROM `content` as w, `users` as t WHERE w.`id_user` = '".$this->userId."'and w.`id_user` = t.`id`  and w.`category_id` = '".$this->catId."'";
        $db = \Classes\DB::getInstance();
        $result = $db->query ($query, MYSQLI_USE_RESULT);
        while ($row=mysqli_fetch_assoc($result)) {
            $total[]=$row;       
        }
        if(!isset($total[0]['id'])){
            return null;
        } 
        $model = new self();//экземпляр класса самого себя
        $model-> res = $total;
        return $model;
    }
}


