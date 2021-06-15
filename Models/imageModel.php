<?php
//static function не нужно создавать объект(экземляр класса)
//$db = \Classes\DB::getInstance(); - Пример обращения
//self::$db = $db; обратиться к public static внутри public static function
//parent::sayHello() обратиться к функциям(методам, полям) унаследовнного класса, когда нет родителя(public $perem) 
class ImageModel{
    public $name;
    public $description;
    public $category_id;
    public $userId;
    
    public function save($login){
        $db = \Classes\DB::getInstance();
        $query = "INSERT INTO `content`
             SET `imageText` ='".$this->description."',
            `id_user`  = '".$this->userId."',     
            `imageDir`  = '".$this->category_id."',
            `category_id`  = '".$this->category_id."'";
        $db->query($query);
        
        if(!$id = $db->insert_id){
            die('Error');
        }
        
        $uploads_dir = '../Users/'.$login.'/'.$this->category_id.'/';
        $new_dir = '../Users/'.$login.'/'.$this->category_id.'/thumbs/';
        $tmp_file = $_FILES['picture']['tmp_name'];
        $data = explode('.', $_FILES['picture']['name']);
        $ext = array_pop($data);
        $file_name = $id.".".$ext;
        move_uploaded_file($tmp_file, $uploads_dir.$file_name);
        copy($uploads_dir.$file_name, $new_dir.$file_name);
        $query = "UPDATE `content`
             SET `imageName` ='".$id."', `imageType`  = '.".$ext."' WHERE `id` ='".$id."'";
        $db->query($query);
    }
}

