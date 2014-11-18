<?php
abstract class controller{
            public $controller;
            public $output;
            
            public function model($model){
                $model_file=DOCMODEl.DIRECTORY_SEPARATOR.$model.".php";
                    
                if(is_file($model_file) && !class_exists($model)){         
                    $model="Model_".$model;
                    $new_model = new $model();
                }
               
                if(isset($new_model)){ 
                    return  $new_model;
                }else{
                    return "model doesn't exist!";
                }
            }
            
            public function render($template){
                    $output=$this->output;
                    $views=new views();
                    $views->display($template,$output);
            }  
}
