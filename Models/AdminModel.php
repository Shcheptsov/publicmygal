<?php
//static function не нужно создавать объект(экземляр класса)
//$db = \Classes\DB::getInstance(); - Пример обращения
//self::$db = $db; обратиться к public static внутри public static function
//parent::sayHello() обратиться к функциям(методам, полям) унаследовнного класса, когда нет родителя(public $perem) 
class AdminModel{
     
    public function categoryList(){
       $db = \Classes\DB::getInstance(); 
       $query = "SELECT w.kat, w.id_category FROM `category`as w,`users`as t where t.`login` = '".$this->login."' and t.`id` = w.`id_user`";
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public  function categoryId(){
       $db = \Classes\DB::getInstance(); 
       $query = "SELECT * FROM `content` as t, `users` as w "
               ."where t.`imageDir` = ".$this->params." and w.`id` = ".$this->userId." and t.`id_user` = ".$this->userId;
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public  function categoryExample(){
       $db = \Classes\DB::getInstance(); 
       $query = "SELECT * FROM ".$this->table."";
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}


