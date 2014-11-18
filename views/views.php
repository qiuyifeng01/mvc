<?php
class views{
    public $head;
    public $foot;
    
    public function __construct(){
        $this->head=DOCTEMPLATE.DIRECTORY_SEPARATOR."head.tpl";        
        $this->foot=DOCTEMPLATE.DIRECTORY_SEPARATOR."foot.tpl";        
    }
    
    public function display($template,$output){
        $template=DOCTEMPLATE.DIRECTORY_SEPARATOR.$template;
        $head=$this->head;
        $foot=$this->foot;
 
        if(is_file($template)){
            include($template);
        }else{
            echo "template doesn't exist";
        }
    }
    
}
