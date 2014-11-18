<?php
    class System_Tools{
        
        static function page($total){
                  
                  $page_index=$_REQUEST['page_index'];
                  $page_per=5;   
                 
                  $page_total=round((int)$total/(int)$page_per);
                   $_SESSION['products_page_total']=$page_total;
                  $page_start=$page_per*($page_index-1);
                  $page_array=array(
                        'page_total'=>$page_total,
                        'page_start'=>$page_start,
                        'page_per'=>$page_per
                    );
                    
              return  $page_array;           
        }
        
        
        
    }
