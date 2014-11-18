<?php
class Model_Order extends model{
        public $order_id;
        public $customer_id;
        
        public function getOrderInfo($order_id){
            $result=$this->query("select * from oc_order where order_id=".(int)$order_id);
            return $result;
        }
        
        public function getOrderProducts($order_id){
            $result=$this->mysql_obj->query("select * from oc_order where order_id=".(int)$order_id);
            return $result;
        }
        
        public function getCustomerOrders($customer_id){
            $result=$this->mysql_obj->query("select * from oc_order where customer_id=".(int)$customer_id);
            return $result;
        }
        
    }
