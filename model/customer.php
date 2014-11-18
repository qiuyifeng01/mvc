<?php
    class Model_Customer extends Model{
        public $customer_id;
        
        public function getCustomerInfo($customer_id){
           
            $result=$this->query("select * from oc_customer where customer_id={$customer_id}");
            return $result;
        }
          
        
    }
