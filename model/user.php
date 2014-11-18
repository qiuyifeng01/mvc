<?php
    class Model_User extends Model{
        public $user;
        
        public function getUserInfo($user_id){
            $sql="select * from oc_user where user_id={$user_id}";               
            return $this->query($sql);
        }
        
        public function register(){
           $user_group_id=isset($_REQUEST['user_group_id'])?$_REQUEST['user_group_id']:0;
           $user_name=isset($_REQUEST['user_name'])?$_REQUEST['user_name']:null;
           $password=isset($_REQUEST['password'])?$_REQUEST['password']:null;
           // $salt=$_REQUEST['salt'];
           $firstname=isset($_REQUEST['firstname'])?$_REQUEST['firstname']:null;
           $lastname=isset($_REQUEST['lastname'])?$_REQUEST['lastname']:null;
           $e_mail=isset($_REQUEST["e_mail"])?$_REQUEST['e_mail']:null;
           $code=isset($_REQUEST["code"])?$_REQUEST['code']:null;
           $ip=$this->getUserIp();
           $status=1;
           $date_added=date("Y-m-d h:i:s");
           // $sql="INSERT INTO `oc_user`( `user_group_id`, `username`, `password`,`firstname`, `lastname`, `email`, `code`, `ip`, `status`, `date_added`) VALUES ($user_group_id,$user_name,$password,$firstname,$lastname,$e_mail,$code,$ip,$status);";
           // $sql="insert into oc_user ('user_group_id','username','password','firstname','lastname','e_mail','code','ip','status') value(1,'goodluck','8147618','goodluck','green','007brucmena@163.com','334000','::1',1);";
           $sql="INSERT INTO `oc_user` ( `user_group_id` , `username` , `password` , `firstname` , `lastname` , `email` , `code` , `ip` , `status`,`date_added` )
VALUES ( 1, '{$user_name}', '{$password}','{$firstname}', '{$lastname}', '{$e_mail}','{$code}', '{$ip}', '{$status}','{$date_added}' ); ";
           $results=$this->query($sql);
           
           if(!$results){
                echo "failure";               
           }else{
               echo "register succsessed";
           }
           
        }
        
        public function getUserIp(){
            $ip=$_SERVER["REMOTE_ADDR"];
            return $ip;
        }
        
        
        
        
    }
