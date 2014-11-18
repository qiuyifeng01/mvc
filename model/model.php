<?php
abstract class Model{
        public $mysql_obj;
        public $test_word;
        public function __construct(){
                $this->mysql_obj = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
                 if ($this->mysql_obj->connect_error) {
                        die('Connect Error (' . $this->mysql_obj->connect_errno . ') '
                                . $this->mysql_obj->connect_error);
                    }
            }
        
        public function query($sql){
                    // $sql="select * from oc_customer";
                    $results=$this->mysql_obj->query($sql);
                    
                    if(!$results){
                           die('failed');
                    }
                    
                    if(is_bool($results)){
                           return $results;
                    }else{
                        $rows[]=array();
                           //while($obj = $result->fetch_object()){
                        while($row=$results->fetch_assoc()){
                            $rows[]=$row;
                        }
                       unset($rows[0]);
                       $results->free_result();
                        
                       if(!empty($rows))
                            return $rows;
                       else
                           return FALSE;
                    }
                                
        }
        
        
           public function query_num($sql){
                    // $sql="select * from oc_customer";
                    $results=$this->mysql_obj->query($sql);
                    $num_rows=mysqli_num_rows($results);
          
                    $results->free_result();
                    
                   if(!empty($num_rows))
                        return $num_rows;
                   else
                       return FALSE;
                                
        }
           
           public function close(){
                    $this->mysql_obj->close();
           }
           
        
        public function del($sql){
                           
        }
        
        
         
        
    }
