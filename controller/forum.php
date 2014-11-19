<?php
class Controller_forum extends  Controller{
    public $title;
    public $content;
    public $user_id;
    
    public function __construct(){
            $forum=$this->model("forum");

            
            $page=isset($_REQUEST("page"))?$_REQUEST["page"]:"threads_list";
            
            if($page=="threads_list"){
                $threads=$forum->getThreads();
                $this->output=$threads;
                
                $template="forum/threads_list.tpl";
                $this->render($template);
            }
            else if($page==""){
              
                
            } else{
                
            }
            $forum->close();
    
    }
    
}
