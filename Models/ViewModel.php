<?php
//static function не нужно создавать объект(экземляр класса)
//$db = \Classes\DB::getInstance(); - Пример обращения
//self::$db = $db; обратиться к public static внутри public static function
//parent::sayHello() обратиться к функциям(методам, полям) унаследовнного класса, когда нет родителя(public $perem) 
class ViewModel{
    public $login;
    public $kat;
    public function categoryList(){
        $db = \Classes\DB::getInstance(); 
        $query = "SELECT w.kat, w.id FROM `category`as w,`users`as t where `login` = '".$this->login."'";
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public  function infoImage(){
        $db = \Classes\DB::getInstance();
        if($this->kat){
            $query = "SELECT `login`,`imageName`,`imageType`,`imageDir`,`imageText` FROM `content`as w, `users`as q where  w.id_user = q.id and `login` ='".$this->login."' and `imageDir` = '".$this->kat."'";
        }else{
            $query = "SELECT `login`,`imageName`,`imageType`,`imageDir`,`imageText` FROM `content`as w, `users`as q where  w.id_user = q.id and `login` ='".$this->login."'";   
        }
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}


