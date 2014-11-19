<?php
class Model_forum extends Model{
    public $title;
    public $cotent;
    public $reply;
    public $reply_user;
    public $user_id;
    
    public function getReply($user_id){
           $sql="select * from oc_forum ;";
           $results=$this->query($sql);
           return $results;
    } 
    
    public function reply(){
            $sql="insert into oc_forum('content','user_id') value('{$content}','{$user_id}'));";
            $results=$this->query($sql);
            return $results;             
    }
    
    public function new_thread(){
            $sql="insert into oc_forum('title','content','user_id') value('{$title}','{$content}','{$user_id}');";
            $results=$this->query($sql);       
            return $results;        
    }
    
    public function getThreads(){
            $sql="select thread_title from oc_forum_thread";
            $results=$this->query($sql);
            return $results;
    }
   
} 