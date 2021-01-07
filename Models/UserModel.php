<?php
//static function не нужно создавать объект(экземляр класса)
//$db = \Classes\DB::getInstance(); - Пример обращения
//self::$db = $db; обратиться к public static внутри public static function
//parent::sayHello() обратиться к функциям(методам, полям) унаследовнного класса, когда нет родителя(public $perem) 
class UserModel{
    public $login;
    public $password;
    public function registerUser(){
        $user = $this->getUserByLogin();
        if($user){
            die("User exist");
        } 
       mkdir("../Users/".$this->login."", 0700); 
       $db = \Classes\DB::getInstance(); 
       $query = "INSERT INTO `users` SET `login` = '".$this->login."', `password` = '".$this->password."', `mail` = '".$this->mail."' ";
       $insert_res = $db->query($query);
       $this->loginUser();
       return (bool) $insert_res; 
    }
    
    private function getUserByLogin(){
        $db = \Classes\DB::getInstance();
        $query = "SELECT * FROM `users` WHERE `login` = '".$this->login."'";
        return $db->query($query)->fetch_assoc();
    }

    public static function userList(){
       $db = \Classes\DB::getInstance(); 
       $query = "SELECT * FROM `users`";
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public function loginUser(){
        $user = $this->getUserByLogin();
        //print_r($user['password']."==".$this->password);
        if ($user['password'] == $this->password){
            Classes\Session::set('user', $user);
            return true;
        }
        return false;     
    }
    
    public function getUserId($login){
        $db = \Classes\DB::getInstance();
        $query = "SELECT `id` FROM `users` WHERE `login` = '".$login."'";
        return $db->query($query)->fetch_assoc();
    }
    
    public static function checkUserAuth(){
        return !is_null(Classes\Session::get('user',null));
    }
}

