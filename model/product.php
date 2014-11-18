<?php  
    class Model_Product extends model{
        public $product_id;
        
        public function getproducts(){
               $sql= "select * from oc_product where product_id>0";
               $page_list=$_REQUEST['page_list'];
               $total=$this->query_num("select * from oc_product where product_id>0");
               $_SESSION['products_total']=$total;
                  
               
           if($page_list==1){
                $page_array=System_Tools::page($total);
                $page_start=$page_array['page_start'];
                $page_total=$page_array['page_total'];
                $page_per=$page_array['page_per'];
               
                 $sql.=" limit {$page_start},{$page_per}";
                                
           }                
     
           // $sql= "select * from oc_product where product_id>0";
            $results=$this->query($sql);
          
            return $results;
        }
        
        public function getProductInfo($product_id){
            $results=$this->query("select * from oc_product where product_id=".(int)$product_id);
            return $results;
        }
        
    }
