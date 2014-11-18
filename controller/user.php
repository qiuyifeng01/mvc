<?php
class Controller_User extends  Controller{
        public $user_id;
        public $user_name;
        
        public function __construct(){
            $user=$this->model("User");
            $page=isset($_REQUEST['page'])?$_REQUEST['page']:"register";            
            
            if($page=="user_info"){
                $user_id=isset($_REQUEST['user_id'])?$_REQUEST['user_id']:1;
                $user_info=$user->getUserInfo($user_id);
                $this->output=$user_info;
               
                $template="user_info.tpl";
                $this->render($template);           
            }   
            if($page=="register"){
                $do_register=isset($_REQUEST['do_register'])?$_REQUEST['do_register']:"true";
                if($do_register==1){
                    $user->register();
                }else{
                    $template="register.tpl";
                    $this->render($template);
                }
                
            }
    
             $user->close();
        }
    
    
}
