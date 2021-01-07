<?php
class UsersController{
    public function register(){
        if(isset($_POST['login']) && isset($_POST['pass'])){
            $user = new UserModel();
            $user->login = $_POST['login'];
            $user->password = $_POST['pass'];
            $user->mail = $_POST['mail'];
            $res =$user->registerUser();
            $this->response(['success' =>$res]);
        }
            global $smarty;
            $smarty->display('Register.tpl');// отображает tpl
    }
    
    public function Login(){
        if(isset($_POST['login']) && isset($_POST['pass'])){
            $user = new UserModel();
            $user->login = $_POST['login'];
            $user->password = $_POST['pass'];
            $res =$user->loginUser();
            $this->response(['success' =>$res]);
        } 
            global $smarty;
            $smarty->display('Login.tpl');// отображает tpl
    }
    
    public function logout(){
        Classes\Session::flush();
        header('Location: /main');
    }
    
    public function allUsers(){
        global $smarty;
        $list = UserModel::userList();
        $smarty->assign('users', $list);// передает данные из php в template
        $smarty->display('Users.tpl');
    }
    
    public function check(){
        if(!\Classes\Session::get('user')){
            global $smarty;
            $smarty->display('test.tpl');
            print_r(__DIR__);
            die('Non login');
        }
        die('Logged in');
    }
    
        private function response($data = ['success' => true]){
         header("Content-Type: application/json");
                 die(json_encode($data));
    }
}
