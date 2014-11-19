<?php

class route{
        public $controller;
        
        public function __construct($route_key){
                        $path=array(
                                            'customer'=>"customer.php",
                                            'product'=>"product.php",
                                            'order'=>'order.php',
                                        );
                                            
                            $controller="Controller_".$route_key;
                            $out=new $controller();    
                // if(key_exists($route_key, $path) && isset($path[$route_key])){
                            // $controller="Controller_".$route_key;
                            // $out=new $controller();
                // }
              
        }
    
}
