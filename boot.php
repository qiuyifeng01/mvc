<?php
    if(!function_exists('autoloader')){
            function autoloader($class){
                    $class=strtolower($class);
                    $class_array=explode("_",$class);
                    $class=isset($class_array[1])?$class_array[1]:$class_array[0];
                    
                    if($class_array[0]=="controller"){
                        $class_name=isset($class_array[1])?"Controller_".$class_array[1]:$class_array[0];
                        $classFile=DOCCONTROLLER.DIRECTORY_SEPARATOR.$class.'.php';
                        if(is_file($classFile) && !class_exists($class_name)) include_once $classFile;
                    }
                    
                    if($class_array[0]=="model"){
                        $class_name=isset($class_array[1])?"Model_".$class_array[1]:$class_array[0];
                        $classFile=DOCMODEl.DIRECTORY_SEPARATOR.$class.'.php';
                        if(is_file($classFile) && !class_exists($class_name)) include_once $classFile;
                    }

                    if($class_array[0]=="system"){
                        $class_name=isset($class_array[1])?"System_".$class_array[1]:$class_array[0];
                        $classFile=DOCSYSTEM.DIRECTORY_SEPARATOR.$class.'.php';
                        if(is_file($classFile) && !class_exists($class_name)) include_once $classFile;
                        
                    }

                }
        }

    spl_autoload_register('autoLoader');
    
    ?>